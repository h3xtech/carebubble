<?php

namespace App\Http\Controllers\API\v08\Activities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\App;
use \App\Activity;
use Carbon\Carbon;


class ActivitiesController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bulkStore(Request $request)
    {
        $activities = $request->activities;
        $i = 0;
        try {
          foreach ($activities as $activity) {
              Activity::create($activity);
              $results = $this->messages("bulk_store_success");
              $i++;
          }
          return json_encode($results);
        }catch (\Exception $e) {
          $this->errors[$i] = $this->errors($e);
          $i++;
        }
    }
    public function store(Request $request, $type = null, $value = null, $unit = null, $amount_changed = null, $previous_value = null, $time_taken = null, $user_id = null){
        $activity = new Activity;
        if ($type != null) {
          $activity->type = $type;
          $activity->value = $value;
          $activity->unit = $unit;
          $activity->amount_changed = $amount_changed;
          $activity->previous_value = $previous_value;
          $activity->time_taken = $time_taken;
          $activity->user_id = $user_id;
          $activity->save();
        }
        else {
          if (isset($request->activity)) {
            $request_activity = $request->activity;
            $activity->type = $request_activity['type'];
            $activity->value = $request_activity['value'];
            $activity->unit = $request_activity['unit'];
            $activity->amount_changed = $request_activity['amount_changed'];
            $activity->previous_value = $request_activity['previous_value'];
            $activity->time_taken = $request_activity['time_taken'];
            $activity->user_id = $request_activity['user_id'];
            $activity->save();
            $results = $this->messages("activity_successfully_added", $activity->id);
            return $results;
          }
          else {

          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function limit(){
      $activities = Activity::orderBy('id', 'desc')->take(5)->get();
      return $activities;
    }
    public function limit_specified($limit){
      $activities = Activity::orderBy('id', 'desc')->take($limit)->get();
      return $activities;
    }
    public function user_limit($user){
      $activities = Activity::where('user_id', $user)->orderBy('id', 'desc')->take(10)->get();
      return $activities;
    }
    public function user_limit_specified($user, $limit){
      $activities = Activity::where('user_id', $user)->orderBy('id', 'desc')->take($limit)->get();
      return $activities;
    }
    private function messages($message, $id = ""){
      switch ($message) {
        case 'activity_successfully_added':
            $results['code'] = "200";
            $results['activity_successfully_added'] = "True";
            $results['activity_id'] = "$id";
            return $results;
          break;
        default:
          // code...
          break;
      }
    }
    public function today($id){
        $today = Activity::whereDate('created_at', Carbon::today())->get();
        return $today;
    }
    public function week($id){
      Carbon::setWeekStartsAt(Carbon::MONDAY);
      Carbon::setWeekEndsAt(Carbon::SUNDAY);
      $week = Activity::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
      return $week;
    }
    public function month($id){
        $month = Activity::whereMonth('created_at', Carbon::now()->month)->get();
        return $month;
    }
    public function analytics($ipaddress, $patient_id, $caregiver_id, $user_id, $action, $udid){
      app('App\Http\Controllers\API\v08\Analytics\AnalyticsController')->store($ipaddress, $patient_id, $caregiver_id, $user_id, $action, $udid);
    }
}
