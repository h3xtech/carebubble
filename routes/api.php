<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

if (isset($_SERVER['HTTP_HOST'])) {
  $sub = explode('.', $_SERVER['HTTP_HOST']);
  $sub = $sub[0];
}
else {
  $sub = "api";
}
$paid = true;
if($sub == "api" AND $paid == true) {
    //root
    Route::view('/', 'welcome');

    //api
    Route::apiResource('/apps', 'AppsController');
    Route::apiResource('/users', 'UserController');
    Route::apiResource('/roles', 'RolesController');
    Route::apiResource('/conditions', 'ConditionsController');
    Route::apiResource('/activities', 'ActivitiesController');
    Route::apiResource('/alerts', 'AlertsController');
    Route::apiResource('/chats', 'ChatsController');
    Route::apiResource('/emergencies', 'EmergenciesController');
    Route::apiResource('/analytics', 'AnalyticsController');
    Route::get('/app/{app}/users', 'AppsController@users');
    Route::get('/user/{user}/alerts', 'AlertsController@users');
    Route::get('/user/{user}/alerts/latest', 'AlertsController@latest');
    Route::get('/user/{user}/conditions', 'ConditionsController@users');
    Route::get('/user/{user}/activities', 'ActivitiesController@user');
    Route::get('/user/{user}/emergencies', 'EmergenciesController@users');
    Route::get('/user/{user}/locations', 'MyLocationsController@users');
    Route::get('/inbox/{user}', 'ChatsController@users');
    Route::get('/profile/{user}', 'UserController@profile');
    Route::put('/alerts', 'AlertsController@store');
    Route::put('/emergencies', 'EmergenciesController@store');
    Route::put('/conditions', 'MyConditionController@store');
    Route::put('/locations', 'MyLocationsController@store');
    Route::put('/analytics', 'AnalyticsController@store');
    Route::patch('/alerts', 'AlertsController@update');

    //Latests
    Route::get('/user/{user}/emergencies/latest', 'UserController@latestEmergency');
    Route::get('/user/{user}/activities/latest', 'UserController@latestActivity');
    Route::get('/user/{user}/alerts/latest', 'UserController@latestAlerts');

    //Connections
    Route::get('/connections/patient/{patient_id}', 'ConnectionsController@patient');
    Route::get('/connections/caregiver/{caregiver_id}', 'ConnectionsController@caregiver');
    Route::get('/connections', 'ConnectionsController@index');
    Route::put('/connections', 'ConnectionsController@store');


    Route::get('/inbox/{id}/convo/{convo}', 'ConvosController@show');
    //dd("Failed to connect to MongoDB cloud: Authentication Error, user not authorized, Authorization denied for user koobli");


    //Tokens
    Route::get('/user/{user}/fitbit/token/status', 'ApiTokenController@status');
    Route::get('/user/{user}/fitbit/token/get', 'ApiTokenController@checkToken');
    Route::get('/user/{user}/fitbit/token/new', 'ApiTokenController@refresh');

    //Limits
    Route::get('/activities/limit/', 'ActivitiesController@limit');
    Route::get('/activities/limit/{limit}', 'ActivitiesController@limit_specified');
    Route::get('/activities/user/{user}/limit', 'ActivitiesController@user_limit');
    Route::get('/activities/user/{user}/limit/{limit}', 'ActivitiesController@user_limit_specified');


    //paring users requests
    Route::post('/connections/request/{pair1}/with/{pair2}', 'ConnectionsController@request');
    Route::post('/connections/confirm/{id}', 'ConnectionsController@confirm');



    ////////////////////////////////////////////////////////////////////////////////////////
    ////
    ////
    ////
    ////                                 Version 0.8
    ////
    ////
    ////
    ////////////////////////////////////////////////////////////////////////////////////////

    //User stuff
    Route::apiResource('/v0.8/users', 'API\v08\Users\UsersController');
    Route::post('/v0.8/user/auth/{type}', 'API\v08\Users\UsersController@auth');
    Route::get('/v0.8/user/check/{type}/{value}', 'API\v08\Users\UsersController@check');
    Route::get('/v0.8/profile/{user}', 'API\v08\Users\UsersController@profile');
    Route::get('/v0.8/user/{user}/activities/limit/{limit}', 'API\v08\Users\UsersController@user_limit_specified');
    Route::post('/v0.8/user/store', 'API\v08\Users\UsersController@store');
    Route::post('/v0.8/user/request-reset', 'API\v08\Users\UsersController@requestReset');
    Route::post('/v0.8/user/reset', 'API\v08\Users\UsersController@reset');
    //Connections
    Route::get('/v0.8/connections', 'API\v08\Connections\ConnectionsController@index');
    Route::get('/v0.8/connections/{id}', 'API\v08\Connections\ConnectionsController@show');
    Route::get('/v0.8/connections/{type}/{id}', 'API\v08\Connections\ConnectionsController@showType');
    Route::get('/v0.8/connections/{type}/{id}/with-users', 'API\v08\Connections\ConnectionsController@showTypeWithUser');
    //AnalyticsController
    Route::apiResource('/v0.8/analytics', 'API\v08\Analytics\AnalyticsController');
    //ActivitiesController
    Route::get('/v0.8/activities/limit/', 'API\v08\Activities\ActivitiesController@limit');
    Route::get('/v0.8/activities/limit/{limit}', 'API\v08\Activities\ActivitiesController@limit_specified');
    Route::get('/v0.8/activities/user/{user}/limit', 'API\v08\Activities\ActivitiesController@user_limit');
    Route::get('/v0.8/activities/user/{user}/limit/{limit}', 'API\v08\Activities\ActivitiesController@user_limit_specified');
    Route::post('/v0.8/activity/add/single/', 'API\v08\Activities\ActivitiesController@store');
    Route::post('/v0.8/activity/add/bulk/', 'API\v08\Activities\ActivitiesController@bulkStore');
    Route::get('/v0.8/activities/user/{id}/today/', 'API\v08\Activities\ActivitiesController@today');
    Route::get('/v0.8/activities/user/{id}/week/', 'API\v08\Activities\ActivitiesController@week');
    Route::get('/v0.8/activities/user/{id}/month/', 'API\v08\Activities\ActivitiesController@month');
    //Alerts
    Route::get('/v0.8/alerts', 'API\v08\Alerts\AlertsController@index');
    Route::get('/v0.8/alerts/{alert}', 'API\v08\Alerts\AlertsController@show');
    Route::post('/v0.8/alerts/update', 'API\v08\Alerts\AlertsController@update');
}
if($paid == false){
    
}
