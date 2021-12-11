<?php

namespace App\Http\Controllers;

use App\Alert;
use Illuminate\Http\Request;

class AlertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Alert::all();
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
        $alerts = $request->alerts;
        $i = 0;
        try {
          foreach ($alerts as $alert) {
              $alert = Alert::create($alert);
              $results[$i]['status'] = "200";
              $results[$i]['solution'] = "Entry added with id: $alert->id";
              $i++;
          }
          return json_encode($results);
        }catch (\Exception $e) {
          $this->errors[$i] = $this->errors($e);
          $i++;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alert  $alert
     * @return \Illuminate\Http\Response
     */
    public function show(Alert $alert)
    {
        return $alert;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alert  $alert
     * @return \Illuminate\Http\Response
     */
    public function edit(Alert $alert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alert  $alert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alert $alert)
    {
      if ($request->header('apiKey') != null AND $request->header('secret') != null){
          $api_key = $request->header('apiKey');
          $secret = $request->header('secret');
          try {
            $app = \App\App::where("api_key", $api_key)->first();
            if ($app->secret == $secret) {
              try {
                $alert = \App\Alert::find($request->header('id'));
                $alert->status = $request->header('status');
                $alert->save();
                $result = array('code' => 200);
                return $result;
              } catch (\Exception $e) {

              }

            }
            else {
              dd("Inalid secret");
            }
          } catch (\Exception $e) {

          }
      }
      else {
        dd("Error: A valid apiKey and secret must be supplied.");
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alert  $alert
     * @return \Illuminate\Http\Response
     */
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
