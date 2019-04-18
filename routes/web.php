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
Route::get('/level2','FrontEndController@leveltwo')->name('leveltwo');          //  Shows Level-2 Login Page on All Dropdowns NOTE:Change it

Route::get('/','FrontEndController@index')->name('index');                                          //  Main Landing Page
Route::get('/secondary','FrontEndController@secondary')->name('secondary');                         //  Select AIT / ABS
Route::get('/abs','FrontEndController@abs')->name('abs');                                           //  Avt Businsess School
Route::get('/ait','FrontEndController@ait')->name('ait');                                           //  Avt I Technology
Route::get('/showpowerbilogin','FrontEndController@showpowerbilogin')->name('showpowerbilogin');    //  Powerbi Login - Faker Logini
Route::post('/powerbilogin','FrontEndController@powerbilogin')->name('powerbilogin');               //  Login User - Add Page to move to 2 other pages
Route::get('/opsorfin','FrontEndController@operationalOrFinancial')->name('opsorfin');              //  Page with links to Operation or Finance

/** AIT Routes */
Route::get('/production','ProductionController@production')->name('production');
Route::get('/production/moulding','ProductionController@moulding')->name('production.moulding');
Route::get('/production/moulding/materials','ProductionController@moulding_materials')->name('production.moulding.materials');
Route::get('/production/moulding/mouldtype','ProductionController@moulding_mouldtype')->name('production.moulding.mouldtype');
Route::get('/production/moulding/runner','ProductionController@moulding_runner')->name('production.moulding.runner');
Route::get('/production/moulding/gatting','ProductionController@moulding_gatting')->name('production.moulding.gatting');
Route::get('/production/moudling/components','ProductionController@moulding_components')->name('production.moulding.component');
Route::get('/production/moulding/injectunit','ProductionController@moulding_injectunit')->name('production.moulding.injectunit');
Route::get('/production/moulding/gendesign','ProductionController@moulding_gendesign')->name('production.moulding.gendesign');
Route::get('/production/moulding/clampingunit','ProductionController@moulding_clampingunit')->name('production.moulding.clampingunit');
Route::get('/production/moulding/processtroubleshoot','ProductionController@moulding_processtroubleshoot')->name('production.moulding.processtroubleshoot');
Route::get('/production/moulding/controlpanel','ProductionController@moulding_controlpanel')->name('production.controlpanel');

Route::get('/production/epp','ProductionController@epp')->name('production.epp');
Route::get('/production/epp/process','ProductionController@epp_process')->name('production.epp.process');
Route::get('/production/epp/impregnation','ProductionController@epp_impregnation')->name('production.epp.impregnation');
Route::get('/production/epp/oven','ProductionController@epp_oven')->name('production.epp.oven');
Route::get('/production/epp/history','ProductionController@epp_history')->name('production.epp.history');

Route::get('/production/paintshop','ProductionController@paintshop')->name('production.paintshop');
Route::get('/production/paintshop/materials','ProductionController@paintshop_materials')->name('production.paintshop.materials');
Route::get('/production/paintshop/iroven','ProductionController@paintshop_iroven')->name('production.paintshop.iroven');
Route::get('/production/paintshop/robot','ProductionController@paintshop_robot')->name('production.paintshop.robot');
Route::get('/production/paintshop/sprayboothahu','ProductionController@paintshop_sprayboothahu')->name('production.paintshop.sprayboothahu');
Route::get('/production/paintshop/sprayguns','ProductionController@paintshop_sprayguns')->name('production.paintshop.sprayguns');
Route::get('/production/paintshop/conveyors','ProductionController@paintshop_conveyors')->name('production.paintshop.conveyors');

Route::get('/profile','FrontEndController@profile')->name('profile');

Route::get('/underconstruction','FrontEndController@underconstruction')->name('underconstruction');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
