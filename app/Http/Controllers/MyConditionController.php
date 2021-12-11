<?php

namespace App\Http\Controllers;

use App\my_condition;
use Illuminate\Http\Request;

class MyConditionController extends Controller
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
        $inComingContentType = $_SERVER['CONTENT_TYPE'];
        if ($inComingContentType != 'application/json') {
            $err = $this->errors('CONTENT_TYPE');
            return $err;
        }
        $conditions = $request->conditions;
        $i = 0;
        try {
          foreach ($conditions as $condition) {
              $condition = my_condition::create($condition);
              $results[$i]['status'] = "200";
              $results[$i]['solution'] = "Entry added with id: $condition->id";
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
     * @param  \App\my_condition  $my_condition
     * @return \Illuminate\Http\Response
     */
    public function show(my_condition $my_condition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\my_condition  $my_condition
     * @return \Illuminate\Http\Response
     */
    public function edit(my_condition $my_condition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\my_condition  $my_condition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, my_condition $my_condition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\my_condition  $my_condition
     * @return \Illuminate\Http\Response
     */
    public function destroy(my_condition $my_condition)
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
}
