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

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');
Route::any('/logout','LoginController@logout');

Route::get('/home', 'HomeController@index');
Route::get('/master', 'HomeController@master');

Route::resource('table','TableController');
Route::resource('store','StoreController');
