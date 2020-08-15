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

Route::get('/statistics','getApiCoronaController@index');
Route::get('/carte_covid','getApiCoronaController@carte_covid');
Route:: get('/countries','getApiCoronaController@getdata' );
Route:: get('/country/Morocco','getApiCoronaController@getcountryflagg' );
Route::get('/','getApiCoronaController@page_index');
Route::get('/prevention','getApiCoronaController@prevention');
Route::get('/navbar','getApiCoronaController@navbar');