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
/*Route::get('/hoome', 'HomeController@index');*/

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('resset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


/*Route::get('/', 'MsBroController@home');*/

/*Route::get('/ndex', function(){
	return view('home');
});*/

Route::get('/daftar', function(){
	return view('daftar');
});

Route::get('/masuk', function(){
	return view('masuk');
});

Route::get('/lupapassword', function(){
	return view('resetpass');
});

Route::get('/upload', function() {
	return view('upload');
});

Route::get('/privupload', ['middleware' => 'auth', function() {
    // Only authenticated users may enter...
    return view('privupload');
}]);

Route::post('profile', [
    'middleware' => 'auth',
    'uses' => 'MsBroController@privupload'
]);

Route::get('/play', function() {
	return view('play');
});

Route::group(['middleware' => 'web'], function () {
	Route::post('/uploading', 'MsBroController@upload');
	Route::get('/{lagu?}', ['uses' => 'MsBroController@play']);
});