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

Route::auth();

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);

Route::get('/', 'MsBroController@home');

Route::get('/ndex', function(){
	return view('home');
});

Route::get('/login', function(){
	return view('login');
});

Route::get('/register', function(){
	return view('register');
});

Route::get('/resetpassword', function(){
	return view('resetpass');
});

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

//Route::get('/home', 'HomeController@index');
