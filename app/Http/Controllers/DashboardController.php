<?php

namespace App\Http\Controllers;

use App\Dashboard;
use App\Patient;
use App\Caregiver;
use App\Activity;
use App\Emergency;
use App\User;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        $caregivers = Caregiver::all();
        $activities = Activity::all();
        $emergencies = Emergency::all();
        return view('home', compact('patients', 'caregivers', 'activities', 'emergencies'));
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
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
    public function user_dashboard(){
      $is_admin = $this->is_admin();
      if ($is_admin == true) {
        $admin = '<a href="https://web.carebubble.co/admin" target="_blank">Admin Dashboard</a>';
      }
      else {
        $admin = "";
      }
      $approved = $this->is_approved();
      if ($approved == 0) {
          return view('home');
      }
      else{
          return redirect('/next-steps');
      }
    }
    public function admin()
    {
        $is_admin = $this->is_admin();
        if($is_admin == true) {
          $patients = Patient::all();
          $caregivers = Caregiver::all();
          $activities = Activity::all();
          $emergencies = Emergency::all();
          return view('admin.index', compact('patients', 'caregivers', 'activities', 'emergencies'));
        }
        else {
          return view('static.unauthorised');
        }
    }
    private function is_approved(){
      $user = Auth::user()->id;
      $user = User::find($user);
      if ($user->approved == 1) {
        return true;
      }
      else {
        return false;
      }
    }
    private function is_admin(){
      $user = Auth::user()->id;
      $user = User::find($user);
      if ($user->is_admin == 1) {
        return true;
      }
      else {
        return false;
      }
    }
    public function next_steps(){
        $admin = $this->is_admin();
        return view('static.next-steps', compact('admin'));
    }
}
