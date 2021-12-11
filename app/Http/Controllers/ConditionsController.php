<?php

namespace App\Http\Controllers;

use App\Condition;
use App\user;
use Illuminate\Http\Request;

class ConditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conditions  = Conditions::all();
        return $conditions;
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
        $chats = $request->chats;
        $i = 0;
        try {
          foreach ($chats as $chat) {
              $chat = Chats::create($chat);
              $results[$i]['status'] = "200";
              $results[$i]['solution'] = "Entry added with id: $chat->id";
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
     * @param  \App\Conditions  $conditions
     * @return \Illuminate\Http\Response
     */
    public function show(Conditions $conditions)
    {
        return $conditions;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conditions  $conditions
     * @return \Illuminate\Http\Response
     */
    public function edit(Conditions $conditions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conditions  $conditions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conditions $conditions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conditions  $conditions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conditions $conditions)
    {
        //
    }
    public function users(User $user)
    {
       $conditions = Condition::where('id', $user->id)->get();
       return $conditions;
    }
}
