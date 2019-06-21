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

Route::get('/','FrontEndController@index')->name('index');                                          //  Main Landing Page
Route::get('/aaic','FrontEndController@aaic')->name('aaic');                         //  Select AIT / ABS
Route::get('/abs','FrontEndController@abs')->name('abs');                                           //  Avt Businsess School
Route::get('/ait','FrontEndController@ait')->name('ait');                                           //  Avt I Technology
Route::get('/level2','FrontEndController@leveltwo')->name('leveltwo');          //  Shows Level-2 Login Page on All Dropdowns NOTE:Change it
// Route::get('/showpowerbilogin','FrontEndController@showpowerbilogin')->name('showpowerbilogin');    //  Powerbi Login - Faker Login
// Route::post('/powerbilogin','FrontEndController@powerbilogin')->name('powerbilogin');               //  Login User - Add Page to move to 2 other pages
Route::get('/opsorfin','FrontEndController@opsOrFin')->name('opsorfin');              //  Page with links to Operation or Finance

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


//  Prodution Epp
Route::get('/production/epp','ProductionController@epp')->name('production.epp');
Route::get('/production/epp/process','ProductionController@epp_process')->name('production.epp.process');
Route::get('/production/epp/impregnation','ProductionController@epp_impregnation')->name('production.epp.impregnation');
Route::get('/production/epp/oven','ProductionController@epp_oven')->name('production.epp.oven');
Route::get('/production/epp/history','ProductionController@epp_history')->name('production.epp.history');

//  Paintshop
Route::get('/production/paintshop','ProductionController@paintshop')->name('production.paintshop');
Route::get('/production/robot/programming','ProductionController@robotProgramming')->name('production.paintshop.robot.programming');
Route::get('/production/paintingequipment/sprayguns','ProductionController@paintEquipmentsSprayGuns')->name('production.paintshop.paintingequipments.sprayguns');
Route::get('/production/paintingequipment/paintpumps','ProductionController@paintEquipmentsPaintPumps')->name('production.paintshop.paintingequipments.paintpumps');
Route::get('/production/chemical/paint','ProductionController@chemicalPaint')->name('production.paintshop.chemical.paint');
Route::get('/production/chemical/hardener','ProductionController@chemicalHardner')->name('production.paintshop.chemical.hardner');
Route::get('/production/chemical/thinner','ProductionController@chemicalThinner')->name('production.paintshop.chemical.thinner');
Route::get('/production/chemical/ipa','ProductionController@chemicalIPA')->name('production.paintshop.chemical.ipa');
Route::get('/production/airfilteration/meshfilter','ProductionController@airfilterationMeshFilter')->name('production.paintshop.airfilteration.meshfilter');
Route::get('/production/airfilteration/bagfilter','ProductionController@airfilterationBagFilter')->name('production.paintshop.airfilteration.bagfilter');
Route::get('/production/airfilteration/ceilingfilter','ProductionController@airfilterationCeilingFilter')->name('production.paintshop.airfilteration.ceilingfilter');
Route::get('/production/oven/iroven','ProductionController@ovenIrOven')->name('production.paintshop.oven.iroven');
Route::get('/production/oven/uvoven','ProductionController@ovenUvOven')->name('production.paintshop.oven.uvoven');
Route::get('/production/spraybooth/airflow','ProductionController@sprayAirflow')->name('production.paintshop.spraybooth.airflow');
Route::get('/production/spraybooth/watercurtain','ProductionController@sprayWaterCurtain')->name('production.paintshop.spraybooth.watercurtain');
Route::get('/production/spraybooth/paintfilters','ProductionController@sprayPaintFilters')->name('production.paintshop.spraybooth.paintfilters');
Route::get('/production/spraybooth/conveyor','ProductionController@sprayConveyor')->name('production.paintshop.spraybooth.conveyor');
Route::get('/production/spraybooth/paintingjigs','ProductionController@sprayPaintingJigs')->name('production.paintshop.spraybooth.paintingjigs');

//  Lamps
Route::get('/production/lamps','ProductionController@lamps')->name('production.lamps');
Route::get('/production/lamps/tests/airleaktester','ProductionController@lampsTestsAirleakTester')->name('production.lamps.tests.airleak');
Route::get('/production/lamps/machines/scararobot','ProductionController@lampsMachineSacraRobot')->name('production.lamps.machines.scararobot');
Route::get('/production/lamps/process/plasmasurfacetreatment','ProductionController@lampsProcessPlasmaSurfaceTreatment')->name('production.lamps.process.plasmasurfacetreatment');
Route::get('/production/lamps/process/adhesivebonding','ProductionController@lampsProcessAdhesiveBonding')->name('production.lamps.process.adhesivebonding');
Route::get('/production/lamps/process/metalplasticwelding','ProductionController@lampsProcessMetalPlasticWelding')->name('production.lamps.process.metalplasticwelding');
Route::get('/production/lamps/process/ultrasonicwelding','ProductionController@lampsProcessUltraSonicWelding')->name('production.lamps.process.ultrasonicwelding');
Route::get('/production/lamps/process/hotplatewelding','ProductionController@lampsProcessHotPlateWelding')->name('production.lamps.process.hotplatewelding');
Route::get('/production/lamps/process/annealingofplastic','ProductionController@lampsProcessAnnealingPlastic')->name('production.lamps.process.annealingofplastic');



Route::get('/profile','FrontEndController@profile')->name('profile');

Route::get('/underconstruction','FrontEndController@underconstruction')->name('underconstruction');

Auth::routes(['register' => false, 'reset' => false , 'verify' => false]);

Route::get('/home', 'HomeController@index')->name('home');
