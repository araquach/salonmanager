<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

// Home Routes

Route::when('admin/*', 'auth');

Route::get('/', 'homeController@showIndex');
Route::get('/admin', array('before' => 'auth', 'uses' => 'homeController@showAdminIndex'));
Route::get('/login', 'HomeController@showLogin');
Route::get('/logout', 'HomeController@actionLogOut');

// Home Form Handlers

Route::post('/login', 'HomeController@handleLogin');


// User Routes

Route::get('/user/create', 'UserController@showCreate');

// User Form Handlers

Route::post('/user/create', 'UserController@handleCreate');


// Holiday Routes

Route::when('holiday/*', 'auth');

Route::model('holiday', 'Holiday');
Route::get('/holiday/index', 'HolidayController@showIndex' );
Route::get('/holiday/create', 'HolidayController@showCreate');
Route::get('/holiday/update/{holiday}', 'HolidayController@showUpdate');

// Holiday Form Handlers

Route::post('/holiday/create', 'HolidayController@handleCreate');
Route::post('/holiday/update', 'HolidayController@handleUpdate');

// Holiday Admin Routes

Route::get('admin/holiday/index', 'HolidayController@showAdminIndex' );
Route::get('admin/holiday/create', 'HolidayController@showAdminCreate');
Route::get('admin/holiday/update/{holiday}', 'HolidayController@showAdminUpdate');

// Holiday Admin Form Handlers

Route::post('admin/holiday/create', 'HolidayController@handleAdminCreate');
Route::post('admin/holiday/update', 'HolidayController@handleAdminUpdate');
