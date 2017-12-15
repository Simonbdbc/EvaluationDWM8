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


Route::get('/', 'BaseController@index');

Route::get('/read', 'BaseController@read');
Route::get('/create', 'CreateController@index');

Route::post('/bottle/insert', 'BottleController@insertOne');
Route::post('/bottle/update', 'BottleController@updateOneAction');

Route::get('/bottle/delete/{id}', 'BottleController@deleteOne');
Route::get('/bottle/update/{id}', 'BottleController@updateOne');