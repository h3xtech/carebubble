<?php

namespace App\Http\Controllers\API\v08\Connections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Connections;
use App\App;
use App\User;

class ConnectionsController extends Controller
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
          $connections = Connections::all();
          return $connections;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
         $connection = Connections::find($id);
         $connection->patient = User::find($connection->patient_id);
         $connection->caregiver = User::find($connection->caregiver_id);
         return $connection;
     }
     public function showType($type, $id)
     {
         switch ($type) {
           case 'patient':
             $connections = Connections::where('patient_id', $id)->get();
           break;
           case 'caregiver':
             $connections = Connections::where('caregiver_id', $id)->get();
           break;

           default:
             // code...
           break;
         }
         return $connections;
     }
     public function showTypeWithUser($type, $id)
     {
         switch ($type) {
           case 'patient':
             $connections = Connections::where('patient_id', $id)->get();
             foreach ($connections as $key => $connection) {
               $connections[$key]->caregiver = User::find($connection->caregiver_id);
             }
           break;
           case 'caregiver':
             $connections = Connections::where('caregiver_id', $id)->get();
             foreach ($connections as $key => $connection) {
               $connections[$key]->patient = User::find($connection->patient_id);
             }
           break;

           default:
             // code...
           break;
         }
         return $connections;
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
}
