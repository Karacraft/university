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

Route::get('/','FrontEndController@index')->name('index');  //login.blade
Route::post('/logme','FrontEndController@login')->name('logme'); //Post
Route::get('/landing','FrontEndController@landing')->name('landing'); //landing shows departments navigation
Route::get('/production','FrontEndController@production')->name('production');
Route::get('/underconstruction','FrontEndController@underconstruction')->name('underconstruction');
Route::get('/machine','FrontEndController@machine')->name('machine');
Route::get('/profile','FrontEndController@profile')->name('profile');




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
