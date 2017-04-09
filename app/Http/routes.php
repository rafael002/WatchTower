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
