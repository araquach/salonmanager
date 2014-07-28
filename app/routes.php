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

Route::get('/', function()
{
	return View::make('home.index');
});

// Holiday Routes

Route::get('/holiday/index', 'HolidayController@showIndex');

Route::get('/holiday/create', 'HolidayController@showCreate');

// Holiday Form Handlers

Route::post('/holiday/create', 'HolidayController@handleCreate');
