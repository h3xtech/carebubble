<?php

namespace App\Http\Controllers;

use App\my_locations;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MyLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $my_locations = my_locations::all();
         return $my_locations;
     }
     public function webIndex()
     {
         $my_locations = my_locations::all();
         return view('locations.index', compact('my_locations'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = json_decode(file_get_contents('http://api.postcodes.io/postcodes/e14%209yf'));
        $location = $location->result;
        $data = $location->latitude . urlencode(',') . $location->longitude;
        return view('locations.create', compact('data'));
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
        $locaitons = $request->locations;
        $i = 0;
        try {
          foreach ($locaitons as $locaiton) {
              $locaiton = my_locations::create($locaiton);
              $results[$i]['status'] = "200";
              $results[$i]['solution'] = "Entry added with id: $locaiton->id";
              $i++;
          }
          return json_encode($results);
        }catch (\Exception $e) {
          $this->errors[$i] = $this->errors("unknown", $e);
          $i++;
        }
        return $this->errors;
    }
    public function webStore(Request $request)
    {
      $postcode = str_replace("+", "%20", $request->postcode);
      $postcode = str_replace(" ", "%20", $request->postcode);
      $location = json_decode(file_get_contents("http://api.postcodes.io/postcodes/$postcode"));
      $location = $location->result;
      $request['gps'] = $location->latitude . "," . $location->longitude;
      $request['frequency'] = 0;
      $request['status'] = 4;
      my_locations::create($request->all());
      $data = urlencode($request['gps']);
      $location = $request['title'];
      $user = $request['user_id'];
      $user = \App\User::find($user);
      return view('locations.stored', compact('data', 'location', 'user'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\my_locations  $my_locations
     * @return \Illuminate\Http\Response
     */
     public function show(my_locations $my_locations)
     {
         //
     }
     public function webShow(my_locations $my_locations)
     {
       return view('locations.show', compact('my_locations'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\my_locations  $my_locations
     * @return \Illuminate\Http\Response
     */
    public function edit(my_locations $my_locations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\my_locations  $my_locations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, my_locations $my_locations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\my_locations  $my_locations
     * @return \Illuminate\Http\Response
     */
     public function destroy(my_locations $my_locations)
     {
         //
     }
     public function users(User $user)
     {
       $my_locations = my_locations::where('user_id', $user->id)->get();
       return $my_locations;
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
