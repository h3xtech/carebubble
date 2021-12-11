<?php

namespace App\Http\Controllers;

use App\Caregiver;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CaregiversController extends Controller
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
        $caregivers = Caregiver::all();
        return view('caregivers.index', compact('caregivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caregivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['name'] = $request['firstname']. " " . $request['lastname'];
        $request['password'] = Hash::make($request['password']);
        $request['app_id'] = 1;
        $request['role'] = 6;
        $request['fitbit_user'] = '';
        $request['fitbit_token'] = '';
        $request['udid'] = '';
        $request['fitbit_token'] = '';
        $request['connection'] = $request['patient_id'];
        $request['referer'] = '';
        $caregiver = Caregiver::create($request->all());
        $caregiver_id = Caregiver::latest()->first()->id;
        $patient_id = Caregiver::latest()->first()->connection;
        $connection = array('caregiver_id' => $caregiver_id, 'patient_id' => $patient_id);
        \App\Connections::create($connection);
        return redirect('/caregivers/added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caregiver  $caregiver
     * @return \Illuminate\Http\Response
     */
    public function show(Caregiver $caregiver)
    {
        return view('caregivers.show', compact('caregiver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caregiver  $caregiver
     * @return \Illuminate\Http\Response
     */
    public function edit(Caregiver $caregiver)
    {
      return view('caregivers.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caregiver  $caregiver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caregiver $caregiver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caregiver  $caregiver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caregiver $caregiver)
    {
      $caregiver->delete();
      return redirect('/caregivers');
    }
}
