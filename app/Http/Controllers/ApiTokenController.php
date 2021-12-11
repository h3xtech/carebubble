<?php

namespace App\Http\Controllers;

use App\ApiToken;
use App\User;
use Illuminate\Http\Request;

class ApiTokenController extends Controller
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
     * @param  \App\ApiToken  $apiToken
     * @return \Illuminate\Http\Response
     */
    public function show(ApiToken $apiToken)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApiToken  $apiToken
     * @return \Illuminate\Http\Response
     */
    public function edit(ApiToken $apiToken)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApiToken  $apiToken
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApiToken $apiToken)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApiToken  $apiToken
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiToken $apiToken)
    {
        //
    }
    public function status(User $user)
    {
      $t=time();
      $ts=date("Y-m-d",$t);
      $id = $user->id;
      switch ($id) {
        case 1:
          $json = array('status' => 'active', 'valid_from' => $ts);
          return json_encode($json);
          break;

        default:
          $json = array("error" => "missing id", "type" => "missing fitbit user_id for $user->name");
          return json_encode($json);
          break;
      }
    }
    public function checkToken(User $user)
    {
      $t=time();
      $ts=date("Y-m-d",$t);
      $id = $user->id;
      switch ($id) {
        case 1:
          $json = array('token' => 'aEuYeKEi9cv2CdGmF8U6EPwxO74RRg3zGL3ClR0YTEf9Lf7hJOmmCBp0WW4sNxPv', 'valid_from' => $ts);
          return json_encode($json);
          break;

        default:
          $json = array("error" => "missing id", "type" => "missing fitbit user_id for $user->name");
          return json_encode($json);
          break;
      }
    }
    public function refresh(User $user)
    {
      $t=time();
      $ts=date("Y-m-d",$t);
      $id = $user->id;
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZac4';
      $randstring = '';
      for ($i = 0; $i < 63; $i++) {
            $randstring .= $characters[rand(0, 63)];
        }
      switch ($id) {
        case 1:
          $json = array('newToken' => $randstring, 'valid_from' => $ts);
          return json_encode($json);
          break;

        default:
          $json = array("error" => "missing id", "type" => "missing fitbit user_id for $user->name");
          return json_encode($json);
          break;
      }
    }
}
