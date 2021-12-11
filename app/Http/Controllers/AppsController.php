<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function __construct()
    {
        $this->errors = array();
        $this->results = array();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $apps = App::all();
       return $apps;
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
      $apps = $request->apps;
      $i = 0;
      try {
        foreach ($apps as $app) {
            $app = App::create($app);
            $results[$i]['status'] = "200";
            $results[$i]['solution'] = "Entry added with id: $app->id";
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
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function show(App $app)
    {
        return $app;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function edit(App $app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, App $app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
     public function destroy(App $app)
     {
         //
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
     public function users(App $app)
     {
        $id = $app->id;
        $appWithUsers = App::find($id)->with('users')->where('id', $id)->get();
        return $appWithUsers;
     }
}
