<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (isset($_SERVER['HTTP_HOST'])) {
  $sub = explode('.', $_SERVER['HTTP_HOST']);
  $sub = $sub[0];
}
else {
  $sub = "web";
}
if($sub == "web") {
    Auth::routes();
    ///House keeping
    Route::get('/dashboard', 'DashboardController@user_dashboard');

    //crm
    Route::get('/pages/docs', 'DocsController@index');
    Route::get('/pages/doc/{doc}', 'DocsController@show');
    Route::get('/', 'PagesController@show');
    Route::get('/pages', 'PagesController@list');
    Route::get('/page/{page}', 'PagesController@show');

    //Admin crm
    Route::post('/section/update', 'SectionsController@update');

    //sections
    Route::get('/sections', 'SectionsController@index');
    Route::get('/section/edit/{section}', 'SectionsController@edit');

    //My locations
    Route::get('/locations', 'MyLocationsController@webindex');
    Route::get('/location/{my_locations}', 'MyLocationsController@webShow');
    Route::get('/locations/create', 'MyLocationsController@create');
    Route::post('/locations/store', 'MyLocationsController@webStore');


    //CaregiversController
    //// Care Giver stuff
    Route::get('/caregivers/', 'CaregiversController@index');
    Route::get('/caregiver/{caregiver}', 'CaregiversController@show');
    Route::get('/caregivers/new', 'CaregiversController@create');
    Route::get('/caregivers/{caregiver}/edit', 'CaregiversController@edit');
    Route::post('/caregivers/store', 'CaregiversController@store');
    Route::get('/caregivers/delete/{caregiver}', 'CaregiversController@destroy');
    Route::get('/caregivers/added', function () {
        return view('caregivers.added');
    });

    //// Patient stuff
    Route::get('/patients/', 'PatientsController@index');
    Route::get('/patient/{patient}', 'PatientsController@show');
    Route::get('/patient/{patient}/activities', 'PatientsController@getPatientActivites');
    Route::get('/patients/new', 'PatientsController@create');
    Route::get('/delete/patient/{patient}', 'PatientsController@webDelete');
    Route::get('/patients/{patient}/edit', 'PatientsController@edit');
    Route::get('/patients/added', function () {
        return view('patients.added');
    });

    //User Dashboard
    Route::get('/dashboard', 'DashboardController@user_dashboard');
    Route::get('/next-steps', 'DashboardController@next_steps');

    //Admin Dashboard
    Route::get('/admin', 'DashboardController@admin');
    //Admin app
    Route::get('/activities', 'ActivitiesController@webIndex');
    Route::get('/delete/activity/{activity}', 'ActivitiesController@webDelete');
    Route::get('/activity/{activity}', 'ActivitiesController@webShow');
    Route::get('/user/settings', 'UserController@webSettings');
    Route::post('/users/update', 'UserController@webUpdate');

    //Pages Admin
    Route::get('/pages/new', 'PagesController@create');
    Route::post('/pages', 'PagesController@store');

    //Fitbit stuff
    Route::get('/fitbit/login', 'FitbitController@login');
    Route::get('/callback', 'FitbitController@redirect');

    //thankyou
    Route::get('/thank-you', function () {
        return view('static.thankyou');
    });
}
elseif ($sub == "www") {
  //Auth
  Auth::routes();
  //thankyou
  Route::get('/thank-you', function () {
      return view('static.thankyou');
  });
  //crm
  Route::get('/pages/docs', 'DocsController@index');
  Route::get('/pages/doc/{doc}', 'DocsController@show');
  Route::get('/', 'PagesController@show');
  Route::get('/pages', 'PagesController@list');
  Route::get('/page/{page}', 'PagesController@show');
  ///House keeping
  Route::get('/dashboard', 'DashboardController@user_dashboard');
  Route::get('/next-steps', 'DashboardController@next_steps');
}
elseif ($sub == "") {
  //Auth
  Auth::routes();
  //crm
  Route::get('/pages/docs', 'DocsController@index');
  Route::get('/pages/doc/{doc}', 'DocsController@show');
  Route::get('/', 'PagesController@show');
  Route::get('/pages', 'PagesController@list');
  Route::get('/page/{page}', 'PagesController@show');
  ///House keeping
  Route::get('/dashboard', 'DashboardController@user_dashboard');
  Route::get('/next-steps', 'DashboardController@next_steps');
}
elseif($sub == "carebubble") {
  //Auth
  Auth::routes();
  //thankyou
  Route::get('/thank-you', function () {
      return view('static.thankyou');
  });
  //crm
  Route::get('/pages/docs', 'DocsController@index');
  Route::get('/pages/doc/{doc}', 'DocsController@show');
  Route::get('/', 'PagesController@show');
  Route::get('/pages', 'PagesController@list');
  Route::get('/page/{page}', 'PagesController@show');
  ///House keeping
  Route::get('/dashboard', 'DashboardController@user_dashboard');
  Route::get('/next-steps', 'DashboardController@next_steps');
}

elseif($sub == "packages"){
  Auth::routes();
  Route::get('/', 'store\PackagesController@index');
  Route::get('/signup/{package}', 'store\PackagesController@show');
}
else {

}
