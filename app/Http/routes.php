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

Route::get('/', 'PagesController@home');
Route::get('/role','UsersDetailController@index');
Route::get('/role/save','UsersDetailController@save');
Route::get('/adsschedule/create','AdsScheduleController@create');
Route::get('/adsschedule/store','AdsScheduleController@store');
Route::get('/adsschedule/index','AdsScheduleController@index');


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
