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
    return view('welcome');
});

Route::get('/login', 'KaController@index');
Route::post('/checkLogin', 'KaController@checkLogin');
Route::get('/login/successAdmin', 'KaController@successLogin');
Route::get('/login/successUser', 'KaController@successLogin');
Route::get('/logout', 'KaController@logout');
