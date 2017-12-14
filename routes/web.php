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



Route::get('/', 'HomeController@index');
Route::get('/create', 'CreateController@index');

Route::post('/vin/insert', 'VinController@insertOne');
Route::post('/vin/update', 'VinController@updateOneAction');

Route::get('/vin/delete/{id}', 'VinController@deleteOne');
Route::get('/vin/update/{id}', 'VinController@updateOne');