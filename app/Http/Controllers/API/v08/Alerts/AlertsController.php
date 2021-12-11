<?php

namespace App\Http\Controllers\API\v08\Alerts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\App;
use App\Alert;

class AlertsController extends Controller
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
    public function index(){
        return Alert::all();
    }
    public function show(Alert $alert)
    {
        return $alert;
    }
    public function update(Request $request)
    {
      $alert = \App\Alert::find($request->id);
      $alert->status = $request->status;
      $alert->update();
      $result = array('code' => 200);
      $result['message'] = "Status successfully updated";
      $result['callback'] = $alert;
      return $result;
    }
    public function destroy(Alert $alert)
    {
          //
    }
    public function users($user)
    {
        $alerts = Alert::where('user_id', $user)->orderBy('id', 'DESC')->get();
        return $alerts;
    }
    public function latest($user)
    {
        $alerts = Alert::where('user_id', $user)->orderBy('id', 'DESC')->first();
        return $alerts;
    }
}
