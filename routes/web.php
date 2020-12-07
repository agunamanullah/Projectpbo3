<?php

use Illuminate\Support\Facades\Route;
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
Route::group(['middleware' => 'checkSession' ], function () {
    Route::get('/', function ()    {
        return view('HomeController@index');
    });
});

Route::get('/login', 'HomeController@login');
Route::get('/masuk', 'HomeController@index');