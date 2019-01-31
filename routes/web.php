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

Route::get('/','FrontEndController@index')->name('index');  //  Main Landing
Route::get('/abs','FrontEndController@abs')->name('abs');   //  Avt Businsess School
Route::get('/ait','FrontEndController@ait')->name('ait');   //  Avt I Technology

/** AIT Routes */
Route::get('/production','ProductionController@production')->name('production');
Route::get('/production/moulding','ProductionController@moulding')->name('production.moulding');
Route::get('/production/moulding/materials','ProductionController@moulding_materials')->name('production.moulding.materials');


Route::get('/production/epp','ProductionController@epp')->name('production.epp');


Route::get('/production/paintshop','ProductionController@paintshop')->name('prduction.paintshop');
Route::get('/production/paintshop/materials','ProductionController@paintshop_materials')->name('prduction.paintshop.materials');



Route::get('/profile','FrontEndController@profile')->name('profile');

Route::get('/underconstruction','FrontEndController@underconstruction')->name('underconstruction');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
