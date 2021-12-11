<?php

namespace App\Http\Controllers\API\v08\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\App;
use App\User;
use App\password_resets;
use App\Activity;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->client_ip = $_SERVER['REMOTE_ADDR'];
        $this->errors = array();
        $this->results = array();
        $sub = explode('.', $_SERVER['HTTP_HOST']);
        $sub = $sub[0];
        if ($sub == "api") {
            // this is the api
            $headers = apache_request_headers();
            if (isset($headers['Apikey'])) {
              $api_key = $headers['Apikey'];
              try {
                $app = App::where('api_key', $api_key)->get();
                if (isset($headers['Secret'])) {
                  if ($headers['Secret'] == $app[0]->secret) {
                    $this->app = $app;
                  }
                  else {
                    $error = array('Secret error:' => 'The secret you supplied does not match the Api Key you supplied');
                    echo json_encode($error);
                    die();
                  }
                }
                else {
                  $error = array('Secret error:' => 'No secret supplied');
                  echo json_encode($error);
                  die();
                }
              } catch (\Exception $e) {
                $error = array('Apikey error:' => 'Incorrect Apikey supplied');
                echo json_encode($error);
                die();
              }
            }
            else {
              $error = array('Apikey error:' => 'No Apikey supplied');
              echo json_encode($error);
              die();
            }
        // This is a web call
        } else {
          $this->server_type = "web";
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return $users;
    }

    /**
     * Show the form for Usereating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly Usereated resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $inComingContentType = $_SERVER['CONTENT_TYPE'];
          if ($inComingContentType != 'application/json') {
              $err = $this->messages('CONTENT_TYPE');
              return $err;
          }
          $users = $request->users;
          $i = 0;
          try {
            foreach ($users as $user) {
                $user = User::create($user);
                $results[$i]['status'] = "200";
                $results[$i]['solution'] = "Entry added with id: $user->id";
                $i++;
            }
            $results['callback'] = $users;
            return json_encode($results);
          }catch (\Exception $e) {
            dd($e);
            $this->errors[$i] = $this->messages($e);
            $i++;
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    public function auth($type, Request $request){
      if ($request->telephone != null) {
        $user = $request->telephone;
        $check = json_decode($this->check($type, $user));
        if ($check->exists == "True") {
          $user = User::find($check->user_id);
          if($request->password == $user->password){
            $results = $this->messages("login_success", $user->id);
            $this->analytics($this->client_ip, null, null, $user->id, "login_as_user_$user->id", null);
            return json_encode($results);
          }
          else {
            $results = $this->messages("login_failure");
            $this->analytics($this->client_ip, null, null, null, "password_failed_login_with_number_$request->telephone", null);
            return json_encode($results);
          }
        }
        else {
          $results = $this->messages("login_failure");
          $this->analytics($this->client_ip, null, null, null, "number_failed_login_with_number_$request->telephone", null);
          return json_encode($results);
        }
      }
      elseif($request->email != null){
          $user = $request->email;
          $type = "e";
          $check = json_decode($this->check($type, $user));
          if ($check->exists == "True") {
              $user = User::find($check->user_id);
              $results = $this->messages("login_success", $user->id);
              $this->analytics($this->client_ip, null, null, $user->id, "login_as_user_$user->id", null);
              return json_encode($results);
          }
      }
    }
    public function requestReset(Request $request){
          if (isset($request->reset['email'])) {
            $user = User::where('email', $request->reset['email'])->get();
            $user_id = $user[0]['id'];
          }
          else {
            $user = User::where('email', $request->reset['phone'])->get();
            $user_id = $user[0]['id'];
          }
          $reset = new password_resets;
          $reset->token = $request->reset['token'];
          $reset->email = $request->reset['email'];
          $reset->phone = $request->reset['phone'];
          $reset->save();
          $results = $this->messages("check_success", $user_id);
          $results['callback'] = $reset;
          return $results;
    }
    public function reset(){

    }
    public function check($type, $value){
      if ($type == "n") {
        $value = "+" . $value;
        try {
          $user = User::where('telephone', $value)->first();
          if ($user != null) {
            $results = $this->messages("check_success", $user->id);
            return json_encode($results);
          }
          else {
            $results = $this->messages("check_failure", 0, $value);
            return json_encode($results);
          }
        } catch (\Exception $e) {
          return json_encode($e);
        }
      }
      if ($type == "e") {
        try {
          $user = User::where('email', $value)->first();
          if ($user != null) {
            $results = $this->messages("check_success", $user->id);
            return json_encode($results);
          }
          else {
            $results = $this->messages("check_failure", 1, $value);
            return json_encode($results);
          }
        } catch (\Exception $e) {
          return json_encode($e);
        }
      }
    }
    public function user_limit_specified($id, $limit){
          $user = User::where('id', $id)->get();
          $user->activities = Activity::where('user_id', $id)->take($limit)->get();
          return $user->activities;
    }
    private function messages($message, $user_id = "", $value = ""){
      switch ($message) {
        case 'login_failure':
            $results['code'] = "403";
            $results['authenticated'] = "False";
            $results['message'] = "Telephone and or password combo did not match!";
            return $results;
          break;
        case 'login_success':
            $results['code'] = "200";
            $results['authenticated'] = "True";
            $results['user_id'] = "$user_id";
            return $results;
          break;
        case 'check_success':
            $results['code'] = "200";
            $results['exists'] = "True";
            $results['user_id'] = "$user_id";
            return $results;
          break;
        case 'check_failure':
            $results['code'] = "404";
            $results['exists'] = "False";
            $results['messsage'] = "$value not found";
            return $results;
          break;
        case 'CONTENT_TYPE':
              $results['code'] = "601";
              $results['message'] = "Content should be sent in JSON Form";
              return $results;
            break;
        default:
          // code...
          break;
      }
    }
    public function analytics($ipaddress, $patient_id, $caregiver_id, $user_id, $action, $udid){
      app('App\Http\Controllers\API\v08\Analytics\AnalyticsController')->store($ipaddress, $patient_id, $caregiver_id, $user_id, $action, $udid);
    }
    public function profile(User $user)
    {
       $profile = \App\User::where('id', $user->id)->with('locations','conditions', 'alerts', 'emergencies')->first();
       return $profile;
    }
}
