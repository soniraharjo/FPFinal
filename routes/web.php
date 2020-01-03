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

Route::get('/', 'PagesController@home');
Route::get('/bisnis', 'PagesController@bisnis');
Route::get('/culture', 'PagesController@culture');
Route::get('/politik', 'PagesController@politik');
Route::get('/sport', 'PagesController@sport');
Route::get('/tech', 'PagesController@tech');

 

/*Route::get('/home','WebController@home')*/
