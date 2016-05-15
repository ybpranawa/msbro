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

Route::get('/', 'MsBroController@home');

Route::get('/upload', function() {
	return view('upload');
});

Route::get('/play', function() {
	return view('play');
});

Route::group(['middleware' => 'web'], function () {
	Route::post('/uploading', 'MsBroController@upload');
	Route::get('/{lagu?}', ['uses' => 'MsBroController@play']);
});