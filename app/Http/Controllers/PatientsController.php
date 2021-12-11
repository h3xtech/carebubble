<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use \App\Activity;

class PatientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::with('conditions', 'locations')->get();
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
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
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $patient = Patient::with('conditions', 'locations', 'emergencies')->where('id', $patient->id)->get();
        if(isset($patient[0])){
          $patient = $patient[0];
        }
        else {
          $patient = array('' => 1);
        }
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
     public function destroy(Patient $patient)
     {
         $patient->delete;
     }
     public function webDelete(Patient $patient)
     {
         $patient->delete();
         echo "user: " . $patient->name .  " Deleted";
         sleep(5);
         return redirect('/patients');
     }
     public function getPatientActivites(Patient $patient)
     {
         $activities = Activity::where('user_id', $patient->id)->orderBy('created_at', 'DESC')->get();
         return view('patients.activities', compact('activities'));
     }
}
