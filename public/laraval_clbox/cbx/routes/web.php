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

Route::get('/', ['uses' => 'HomeController@index']);

Route::get('/dashboard/overview', ['uses' => 'DashboardController@overview']);

Route::get('/dashboard/apps/user', ['uses' => 'DashboardController@appsUser']);

Route::get('/dashboard/apps/admin', ['uses' => 'DashboardController@appsAdmin']);

Route::get('/dashboard/users', ['uses' => 'DashboardController@users']);


Route::get('/wel', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "geg";
});
