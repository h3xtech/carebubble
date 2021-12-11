<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use \App\User;
class ActivitiesController extends Controller
{
    public function __construct()
    {
        $sub = explode('.', $_SERVER['HTTP_HOST']);
        $sub = $sub[0];
        if($sub != "api") {
          $this->middleware('auth', ['except' => ['null']]);
        }
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
         //$activities = Activity::all();
         $activities = array('Error' => 'Query too big to return, please use /activities/limit');
         return $activities;
     }
     public function webIndex()
     {
         $activities = Activity::orderBy('created_at', 'DESC')->get();
         return view('activities.index', compact('activities'));
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
        $events = $request->events;
        $i = 0;
        $entry = $events[0];
        switch ($entry['type']) {
          //Hear Rate
          case 'Heart Rate':
            $user = User::find($entry['user_id']);
            $age = $user->age;
            if($age >=30 AND $age <=40){
              if ($entry['value'] >=180) {
                $alert = array('type' => 'Exessive Heart Rate', 'threat_level' => 'critical', 'description' => "$user->name has experienced an extreme heart rate, which could be a heart attack", 'status' => '0', 'user_id' => $entry['user_id']);
                \App\Alert::create($alert);
                $results['warnings'][0] = "Heart rate warning";
              }
            }
            if($age >=40 AND $age <=50){
              if ($entry['value'] >=175) {
                $alert = array('type' => 'Exessive Heart Rate', 'threat_level' => 'critical', 'description' => "$user->name has experienced an extreme heart rate, which could be a heart attack", 'status' => '0', 'user_id' => $entry['user_id']);
                \App\Alert::create($alert);
                $results['warnings'][0] = "Heart rate warning";
              }
            }
            if($age >=60 AND $age <=70){
              if ($entry['value'] >=170) {
                $alert = array('type' => 'Exessive Heart Rate', 'threat_level' => 'critical', 'description' => "$user->name has experienced an extreme heart rate, which could be a heart attack", 'status' => '0', 'user_id' => $entry['user_id']);
                \App\Alert::create($alert);
                $results['warnings'][0] = "Heart rate warning";
              }
            }
            if($age >=80 AND $age <=90){
              if ($entry['value'] >=160) {
                $alert = array('type' => 'Exessive Heart Rate', 'threat_level' => 'critical', 'description' => "$user->name has experienced an extreme heart rate, which could be a heart attack", 'status' => '0', 'user_id' => $entry['user_id']);
                \App\Alert::create($alert);
                $results['warnings'][0] = "Heart rate warning";
              }
            }
            if($age >=90 AND $age <=100){
              if ($entry['value'] >=150) {
                $alert = array('type' => 'Exessive Heart Rate', 'threat_level' => 'critical', 'description' => "$user->name has experienced an extreme heart rate, which could be a heart attack", 'status' => '0', 'user_id' => $entry['user_id']);
                \App\Alert::create($alert);
                $results['warnings'][0] = "Heart rate warning";
              }
            }
            else {
              break;
            }
          break;
          //Sleep
          case 'Sleep2':
            if ($entry['value'] < 360) {
              $user = User::find($entry['user_id']);
              $alert = array('type' => 'Lack of sleep', 'threat_level' => 'low', 'description' => "$user->name had less than 6 hours sleep yesterday, which could be a sign of stress", 'status' => '0', 'user_id' => $entry['user_id']);
              \App\Alert::create($alert);
              $results['warnings'][0] = "Lack of sleep notice";
            }
          break;
          case 'Steps Taken (Phone)':
              if ($entry['value'] > 10000) {
                $user = User::find($entry['user_id']);
                $steps = $entry['value'];
                $alert = array('type' => 'Too Many Steps notice', 'threat_level' => 'low', 'description' => "$user->name has walked $steps steps today!", 'status' => '0', 'user_id' => $entry['user_id']);
                \App\Alert::create($alert);
                $results['warnings'][0] = "Too many steps notice";
              }
          break;
          case 'Steps Taken (Fitbit)':
              if ($entry['value'] > 10000) {
                $user = User::find($entry['user_id']);
                $steps = $entry['value'];
                $alert = array('type' => 'Too Many Steps notice', 'threat_level' => 'low', 'description' => "$user->name has walked $steps steps today!", 'status' => '0', 'user_id' => $entry['user_id']);
                \App\Alert::create($alert);
                $results['warnings'][0] = "Too many steps notice";
              }
          break;
          default:
            // code...
            break;
        }
        if($entry['type'] = "Heart Rate"){

        }
        try {
          foreach ($events as $event) {
              $event = Activity::create($event);
              $results[$i]['status'] = "200";
              $results[$i]['solution'] = "Entry added with id: $event->id";
              $i++;
          }
          $results['callback'] = $events;
          return json_encode($results);
        }catch (\Exception $e) {
          $this->errors[$i] = $this->errors($e);
          $i++;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
     public function show(Activity $activity)
     {
         return $activity;
     }
     public function webShow(Activity $activity)
     {
         return view('activities.show', compact('activity'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\activity  $activity
     * @return \Illuminate\Http\Response
     */
     public function destroy(activity $activity)
     {
         //
     }
     public function webDelete(activity $activity)
     {
         $activity->delete();
         return redirect('/web/activities');
     }
    public function errors($type){
        switch ($type) {
          case 'CONTENT_TYPE':
              $error[0]['title'] = "Wrong content type";
              $error[0]['solution'] = "Expecting JSON format";
              return json_encode($error);
            break;

          default:
            $error[0]['title'] = "Unknown error";
            $error[0]['solution'] = $type;
            return json_encode($error);
            break;
        }
    }
    public function user(User $user){
      return $user->activities;
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
}
