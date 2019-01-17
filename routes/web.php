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

Route::get('/','FrontEndController@index')->name('index');
Route::post('/logme','FrontEndController@login')->name('logme');
Route::get('/landing','FrontEndController@landing')->name('landing');
Route::get('/landing/{string}','FrontEndController@showpage')->name('showpage');
Route::get('/machine','FrontEndController@machine')->name('machine');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
