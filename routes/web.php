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

//  THEATER
//  all
Route::get('/api/theater', 'TheaterController@index');
//  individual
Route::get('/api/theater/single', 'TheaterController@single');


//  MOVIES
Route::get('/api/movies', 'MovieController@index');
