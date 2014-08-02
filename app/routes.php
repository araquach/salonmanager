<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Home Routes

Route::get('/', 'homeController@showIndex');

Route::get('/login', 'HomeController@showLogin');

Route::get('/logout', 'HomeController@actionLogOut');

// Home Form Handlers

Route::post('/login', 'HomeController@handleLogin');


// User Routes

Route::get('/user/create', 'UserController@showCreate');

// User Form Handlers

Route::post('/user/create', 'UserController@handleCreate');


// Holiday Routes

Route::model('holiday', 'Holiday');

Route::get('/holiday/index', 'HolidayController@showIndex');

Route::get('/holiday/create', array('before' => 'auth', 'HolidayController@showCreate'));

Route::get('/holiday/update/{holiday}', 'HolidayController@showUpdate');

// Holiday Form Handlers

Route::post('/holiday/create', 'HolidayController@handleCreate');

Route::post('/holiday/update', 'HolidayController@handleUpdate');
