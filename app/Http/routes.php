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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/main', function () {
//     return view('layouts.main');
// });

Route::resource('main/users', 'UsersController');
Route::resource('main/taxis', 'TaxisController');
Route::get('main/users/api/getdata', 'UsersController@userDataApi');
Route::get('main/taxis/api/getdata', 'TaxisController@taxiDataApi');