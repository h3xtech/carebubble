<?php

namespace App\Http\Controllers;

use App\Connections;
use Illuminate\Http\Request;
use App\App;

class ConnectionsController extends Controller
{
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
        $inComingContentType = $_SERVER['CONTENT_TYPE'];
        if ($inComingContentType != 'application/json') {
            $err = $this->errors('CONTENT_TYPE');
            return $err;
        }
        $connections = $request->connections;
        $i = 0;
        try {
          foreach ($connections as $connection) {
              $connection = Connections::create($connection);
              $results[$i]['status'] = "200";
              $results[$i]['solution'] = "Entry added with id: $connection->id";
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
     * @param  \App\Connections  $connections
     * @return \Illuminate\Http\Response
     */
    public function show(Connections $connections)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Connections  $connections
     * @return \Illuminate\Http\Response
     */
    public function edit(Connections $connections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Connections  $connections
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Connections $connections)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Connections  $connections
     * @return \Illuminate\Http\Response
     */
     public function destroy(Connections $connections)
     {
         //
     }
     public function request($pair1, $pair2)
     {
         $this->errors = array();
         $this->results = array();
         $sub = explode('.', $_SERVER['HTTP_HOST']);
         $sub = $sub[0];
         if ($sub == "api") {
             // this is the api
             $results[0]['code'] = "200";
             $results[0]['message'] = "Connection added";
             $results[0]['connection_id'] = "17";

             return json_encode($results[0]);
         // This is a web call
         } else {
           $this->server_type = "web";
         }
    }
    public function confirm($id)
    {
        $this->errors = array();
        $this->results = array();
        $sub = explode('.', $_SERVER['HTTP_HOST']);
        $sub = $sub[0];
        if ($sub == "api") {
            // this is the api
            $results[0]['code'] = "200";
            $results[0]['message'] = "Connection confirmed";
            $results[0]['connection_id'] = "$id";

            return json_encode($results[0]);
        // This is a web call
        } else {
          $this->server_type = "web";
        }
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
    public function patient(Request $request)
    {
      return \App\Connections::select('caregiver_id')->where('patient_id', $request->patient_id)->get();
    }
    public function caregiver(Request $request)
    {
      return \App\Connections::select('patient_id')->where('caregiver_id', $request->caregiver_id)->get();
    }
}
