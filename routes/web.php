<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/edit/{user}', 'ProfileController@edit');
Route::patch('/profile/update/{user}', 'ProfileController@update');

//Dashboard route
Route::get('/dashboard', 'DashboardController@index');

//Form Route
Route::get('/form', 'FormController@index');
Route::post('/form/send', 'FormController@save');
Route::get('/form/fetch', 'FormController@fetch');

