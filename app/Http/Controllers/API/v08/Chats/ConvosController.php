<?php

namespace App\Http\Controllers\API\v08\Chats;

use App\Convo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\App;
use App\User;

class ConvosController extends Controller
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
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Convo  $convo
     * @return \Illuminate\Http\Response
     */
    public function show($inbox, $convo)
    {
      $convo = Convo::where('convo_id', $convo)->get();
      return $convo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Convo  $convo
     * @return \Illuminate\Http\Response
     */
    public function edit(Convo $convo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Convo  $convo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convo $convo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Convo  $convo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convo $convo)
    {
        //
    }
}
