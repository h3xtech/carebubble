<?php

namespace App\Http\Controllers\API\v08\Emergencies;

use App\Http\Controllers\Controller;
use App\Emergency;
use App\User;
use Illuminate\Http\Request;

class EmergenciesController extends Controller
{
    public function __construct()
    {
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
        $emergencies = Emergency::all();
        return $emergencies;
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
    public function store(Request $request)
    {
        $inComingContentType = $_SERVER['CONTENT_TYPE'];
        if ($inComingContentType != 'application/json') {
            $err = $this->errors('CONTENT_TYPE');
            return $err;
        }
        $emergencyies = $request->emergencies;
        $i = 0;
        try {
          foreach ($emergencyies as $emergency) {
              $emergency = Emergency::create($emergency);
              $results[$i]['status'] = "200";
              $results[$i]['solution'] = "Entry added with id: $emergency->id";
              $i++;
          }
          return json_encode($results);
        }catch (\Exception $e) {
          $this->errors[$i] = $this->errors("unknown", $e);
          $i++;
        }
        return $this->errors;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function show(Emergency $emergency)
    {
        return $emergency;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function edit(Emergency $emergency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emergency $emergency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
     public function destroy(Emergency $emergency)
     {
         //
     }
     public function users(User $user)
     {
         $emergencies = Emergency::where('user_id', $user->id)->get();
         return $emergencies;
     }
     public function errors($type, $e = null){
         switch ($type) {
           case 'CONTENT_TYPE':
               $error[0]['title'] = "Wrong content type";
               $error[0]['solution'] = "Expecting JSON format";
               return json_encode($error);
             break;

           default:
             $error[0]['title'] = "$type";
             $error[0]['solution'] = "$e";
             return json_encode($error);
             break;
         }
     }
}
