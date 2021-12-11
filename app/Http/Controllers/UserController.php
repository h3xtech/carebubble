<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'store', 'show', 'profile', 'latestEmergency', 'latestActivity', 'latestAlerts']]);
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
     public function webUpdate(Request $request)
     {
         $user = Auth::user()->id;
         $user = User::find($user);
         $user->password = Hash::make($request->password);
         $user->save();
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
     public function profile(User $user)
     {
        $profile = \App\User::where('id', $user->id)->with('locations','conditions', 'alerts', 'emergencies')->first();
        return $profile;
     }
     public function latestEmergency(User $user){
       $emergency = \App\Emergency::where('user_id', $user->id)->orderBy('id', 'DESC')->first();
       return $emergency;
     }
     public function latestActivity(User $user){
       $activity = \App\Activity::where('user_id', $user->id)->orderBy('id', 'DESC')->first();
       return $activity;
     }
     public function latestAlerts(User $user){
       $alert = \App\Alert::where('user_id', $user->id)->orderBy('id', 'DESC')->first();
       return $alert;
     }
     public function webSettings()
     {
         return view('users.settings');
     }
     private function messages($message, $user_id = ""){
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
             return $results;
           break;
         default:
           // code...
           break;
       }
     }
}
