<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//INDICATOR

Route::get( '/indicators/new/', 'IndicatorController@register' );

Route::post( '/indicators/new/save/', 'IndicatorController@save' );

Route::get( '/indicators/list/', 'IndicatorController@listIndicator' );

//Route::get( '/indicators/update/', 'IndicatorController@update');

// ACTIVITY

Route::post('/activity/create/', 'ActivityController@create');

Route::get('/activity/delete/', 'ActivityController@delete');

Route::get('/activity/update/', 'ActivityController@update');

// MEETING

Route::post('/meeting/create/', 'MeetingController@create');

Route::get('/meeting/delete/', 'MeetingController@delete');

Route::get('/meeting/update/', 'MeetingController@update');


// CONGREGATION

Route::post('/congregation/create/', 'CongregationController@create');

Route::get('/congregation/delete/', 'CongregationController@delete');

Route::get('/congregation/update/', 'CongregationController@update');

