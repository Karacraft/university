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
//  Molding -> Machines 1.1
Route::get('/production','ProductionController@production')->name('production');
Route::get('/production/molding','ProductionController@molding')->name('production.molding');
Route::get('/production/molding/gendesign','ProductionController@molding_gendesign')->name('production.molding.gendesign');
Route::get('/production/molding/injectunit','ProductionController@molding_injectionunit')->name('production.molding.injectunit');
Route::get('/production/molding/clampingunit','ProductionController@molding_clampingunit')->name('production.molding.clampingunit');
Route::get('/production/molding/processtroubleshoot','ProductionController@molding_processtroubleshoot')->name('production.molding.processtroubleshoot');
Route::get('/production/molding/energy','ProductionController@molding_energy')->name('production.molding.energy');
Route::get('/production/molding/efficiency','ProductionController@molding_efficiency')->name('production.molding.efficiency');
Route::get('/production/molding/hydraulics','ProductionController@molding_hydraulics')->name('production.molding.hydraulics');
Route::get('/production/molding/controlpanel','ProductionController@molding_controlpanel')->name('production.molding.controlpanel');
Route::get('/production/molding/processparam','ProductionController@molding_processparam')->name('production.molding.processparam');
Route::get('/production/molding/matpartsmovement','ProductionController@molding_matpartmovement')->name('production.molding.matpartsmovement');
 
//  Molding->Molds 1.2
Route::get('/production/molding/moldtype','ProductionController@molding_moldtype')->name('production.molding.moldtype');
Route::get('/production/molding/runner','ProductionController@molding_runner')->name('production.molding.runner');
Route::get('/production/molding/gatting','ProductionController@molding_gatting')->name('production.molding.gatting');
Route::get('/production/molding/components','ProductionController@molding_components')->name('production.molding.component');
Route::get('/production/molding/maintenance','ProductionController@molding_maintenance')->name('production.molding.maintenance');

//  Molding->Materials 1.3
Route::get('/production/molding/materials','ProductionController@moulding_materials')->name('production.moulding.materials');



Route::get('/production/epp','ProductionController@epp')->name('production.epp');
Route::get('/production/epp/process','ProductionController@epp_process')->name('production.epp.process');
Route::get('/production/epp/impregnation','ProductionController@epp_impregnation')->name('production.epp.impregnation');
Route::get('/production/epp/oven','ProductionController@epp_oven')->name('production.epp.oven');
Route::get('/production/epp/history','ProductionController@epp_history')->name('production.epp.history');

//  Paintshop
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
