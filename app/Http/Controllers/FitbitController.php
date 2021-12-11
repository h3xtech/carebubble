<?php

namespace App\Http\Controllers;

use App\Fitbit;
use Illuminate\Http\Request;

class FitbitController extends Controller
{
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fitbit  $fitbit
     * @return \Illuminate\Http\Response
     */
    public function show(Fitbit $fitbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fitbit  $fitbit
     * @return \Illuminate\Http\Response
     */
    public function edit(Fitbit $fitbit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fitbit  $fitbit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fitbit $fitbit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fitbit  $fitbit
     * @return \Illuminate\Http\Response
     */
     public function destroy(Fitbit $fitbit)
     {
         //
     }
     public function callback(Request $request)
     {
       $code = $request->code;
       $result = json_decode($this->getToken($code), true);
       dd($result);
       $profile = json_decode($this->getProfile($result['user_id'], $result['access_token']), true);
       $profile = $profile['user'];
       return view('fitbit.profile', compact('profile'));
     }
     public function login()
     {
         header("Location: https://www.fitbit.com/oauth2/authorize?response_type=code&client_id=22BLQ2&redirect_uri=https%3A%2F%2Fcarebubble.site%2Fcallback&scope=activity%20heartrate%20location%20nutrition%20profile%20settings%20sleep%20social%20weight&expires_in=604800");
         die;
     }
     public function getToken($code){
       //header('Content-Type: application/json');
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.fitbit.com/oauth2/token?grant_type=authorization_code&redirect_uri=https://carebubble.site/callback&code=' . $code,
          CURLOPT_POST => 1,
          CURLOPT_RETURNTRANSFER => 0,
          CURLOPT_HTTPHEADER => array(
            "Authorization: Basic MjJCTFEyOjZkN2JiNGM2YjQ4OTQwZTViMWU4Y2EyZDgxZmZlZjlh",
            "content-type: application/x-www-form-urlencoded",
            "content-length: 121",
          ),
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
     }
     function getProfile($user, $token){
       $curl = curl_init();
       curl_setopt_array($curl, array(
         CURLOPT_URL => "https://api.fitbit.com/1/user/$user/profile.json",
         CURLOPT_RETURNTRANSFER => 1,
         CURLOPT_HTTPHEADER => array(
           "Authorization: Bearer $token",
         ),
       ));
       $result = curl_exec($curl);
       curl_close($curl);
       return $result;
     }
     public function redirect(Request $request){
       $code = $request->code;
       return redirect()->away("carebubble://callback?code=$code");
     }
}
