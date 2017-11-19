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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'HomeController@search');

Route::get('/register-patient', 'HomeController@registerPatient');

Route::post('/new-patient', [
	'uses' => '\App\Http\Controllers\HomeController@postPatient',
	'middleware' => ['auth'],
]);

Route::get('patient/{id}', 'HomeController@patient')->name('patient');

Route::post('/new-note', [
	'uses' => '\App\Http\Controllers\HomeController@postNote',
	'middleware' => ['auth'],
]);

Route::post('/search', [
	'uses' => '\App\Http\Controllers\HomeController@postSearch',
	'middleware' => ['auth'],
]);
