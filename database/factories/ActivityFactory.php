<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity;
use Faker\Generator as Faker;

$factory->define(activity::class, function (Faker $faker) {
    $id = rand(1,10);
    $GPS = array('48.17546, -89.75176', '38.07587, 62.83922', '51.5073219, -0.1276474', '52.4796992, -1.9026911', '51.8995685, -2.0711559', '50.8220399, -0.1374061', '51.7704679,0.4646698');
    $randGPS = rand(0,5);
    //Type
    $rand = array();
    $rand[1]['type'] = 'Location Change';
    $rand[2]['type'] = 'Steps Taken';
    $rand[3]['type'] = 'Heartbeat';
    $rand[4]['type'] = 'Phone Activity';
    $rand[5]['type'] = 'No Activity';
    $rand[6]['type'] = 'Oxygen Sturation';
    $rand[7]['type'] = 'Sugar levels';
    $rand[8]['type'] = 'Temperature';
    $rand[9]['type'] = 'sleep';
    $rand[10]['type'] = 'Calories Burned';
    //value
    $steps = rand(3000,15000);
    $hb = rand(50,189);
    $phoneAct = array('Phone Call', 'App useage', 'Text message', 'Missed call');
    $randPhone = rand(0,3);
    $randPhone = $phoneAct[$randPhone];
    $noAct = rand(0,300);
    $randOx = rand(50,100);
    $randSug = rand(3,17);
    $randTemp = rand(35, 41);
    $randSleep = rand(0,10);
    $randCal = rand(50,300);
    $rand[1]['value'] = $GPS[$randGPS];
    $rand[2]['value'] = $steps;
    $rand[3]['value'] = $hb;
    $rand[4]['value'] = $randPhone;
    $rand[5]['value'] = $noAct;
    $rand[6]['value'] = $randOx;
    $rand[7]['value'] = $randSug;
    $rand[8]['value'] = $randTemp;
    $rand[9]['value'] = $randSleep;
    $rand[10]['value'] = $randCal;
    //unit
    $rand[1]['unit'] = 'GPS Cords';
    $rand[2]['unit'] = 'minutes';
    $rand[3]['unit'] = 'BPM';
    $rand[4]['unit'] = 'type';
    $rand[5]['unit'] = 'seconds';
    $rand[6]['unit'] = 'Percent';
    $rand[7]['unit'] = 'Mmol/L';
    $rand[8]['unit'] = 'case';
    $rand[9]['unit'] = 'Hours';
    $rand[10]['unit'] = 'KCal';
    //amount_changed
    $rand[1]['amount_changed'] = rand(3,50) . 'km';
    $rand[2]['amount_changed'] = rand(0, $steps);
    $rand[3]['amount_changed'] = rand(0, $hb);
    $rand[4]['amount_changed'] = 'Active';
    $rand[5]['amount_changed'] = rand(0, $noAct);
    $rand[6]['amount_changed'] = rand(0, $randOx);
    $rand[7]['amount_changed'] = rand(0, $randSug);
    $rand[8]['amount_changed'] = rand(0, $randTemp);
    $rand[9]['amount_changed'] = rand(0, $randSleep);
    $rand[10]['amount_changed'] = rand(0, $randCal);
    //previous_value
    $rand[1]['previous_value'] = $GPS[$randGPS];
    $rand[2]['previous_value'] = rand(0, $steps);
    $rand[3]['previous_value'] = rand(0, $hb);
    $rand[4]['previous_value'] = 0;
    $rand[5]['previous_value'] = rand(0, $noAct);
    $rand[6]['previous_value'] = rand(0, $randOx);
    $rand[7]['previous_value'] = rand(0, $randSug);
    $rand[8]['previous_value'] = rand(0, $randTemp);
    $rand[9]['previous_value'] = rand(0, $randSleep);
    $rand[10]['previous_value'] = rand(0, $randCal);
    //time_taken
    $rand[1]['time_taken'] = 25;
    $rand[2]['time_taken'] = 1500;
    $rand[3]['time_taken'] = 10;
    $rand[4]['time_taken'] = 120;
    $rand[5]['time_taken'] = 260;
    $rand[6]['time_taken'] = 120;
    $rand[7]['time_taken'] = 260;
    $rand[8]['time_taken'] = 120;
    $rand[9]['time_taken'] = 260;
    $rand[10]['time_taken'] = 260;
    //user_id
    if (!function_exists('getPatient')) {
      function getPatient(){
        $patients = \App\Patient::all();
        $max = count($patients)-1;
        $randPatient = rand(0,$max);
        $patient = $patients[$randPatient];
        return $patient;
      }
    }
    $rand[1]['user_id'] = getPatient();
    $rand[2]['user_id'] = getPatient();
    $rand[3]['user_id'] = getPatient();
    $rand[4]['user_id'] = getPatient();
    $rand[5]['user_id'] = getPatient();
    $rand[6]['user_id'] = getPatient();
    $rand[7]['user_id'] = getPatient();
    $rand[8]['user_id'] = getPatient();
    $rand[9]['user_id'] = getPatient();
    $rand[10]['user_id'] = getPatient();
    return [
        'type' => $rand[$id]['type'] ,
        'value' => $rand[$id]['value'] ,
        'unit' => $rand[$id]['unit'],
        'amount_changed' => $rand[$id]['amount_changed'],
        'previous_value' => $rand[$id]['previous_value'],
        'time_taken' => $rand[$id]['time_taken'],
        'user_id' => $rand[$id]['user_id']
    ];
});
