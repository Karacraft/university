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
//  Production
Route::get('/production','ProductionController@production')->name('production');
//  Molding
Route::get('/production/molding','ProductionController@molding')->name('production.molding');
//  Molding -> Machines 1.1
Route::get('/production/molding/machines/gendesign','ProductionController@molding_gendesign')->name('production.molding.gendesign');
Route::get('/production/molding/machines/injectunit','ProductionController@molding_injectionunit')->name('production.molding.injectunit');
Route::get('/production/molding/machines/clampingunit','ProductionController@molding_clampingunit')->name('production.molding.clampingunit');
Route::get('/production/molding/machines/processtroubleshoot','ProductionController@molding_processtroubleshoot')->name('production.molding.processtroubleshoot');
Route::get('/production/molding/machines/energy','ProductionController@molding_energy')->name('production.molding.energy');
Route::get('/production/molding/machines/efficiency','ProductionController@molding_efficiency')->name('production.molding.efficiency');
Route::get('/production/molding/machines/hydraulics','ProductionController@molding_hydraulics')->name('production.molding.hydraulics');
Route::get('/production/molding/machines/controlpanel','ProductionController@molding_controlpanel')->name('production.molding.controlpanel');
Route::get('/production/molding/machines/processparam','ProductionController@molding_processparam')->name('production.molding.processparam');
Route::get('/production/molding/machines/matpartsmovement','ProductionController@molding_matpartmovement')->name('production.molding.matpartsmovement');
//  Molding->Molds 1.2
Route::get('/production/molding/molds/moldtype','ProductionController@molding_moldtype')->name('production.molding.moldtype');
Route::get('/production/molding/molds/runner','ProductionController@molding_runner')->name('production.molding.runner');
Route::get('/production/molding/molds/gatting','ProductionController@molding_gatting')->name('production.molding.gatting');
Route::get('/production/molding/molds/components','ProductionController@molding_components')->name('production.molding.component');
Route::get('/production/molding/molds/maintenance','ProductionController@molding_maintenance')->name('production.molding.maintenance');
//  Molding->Materials 1.3
// Route::get('/production/materials','ProductionController@moldingMaterials')->name('production.moulding.materials');
Route::get('/production/materials/plastics','ProductionController@moldingMaterialsPlastics')->name('production.moulding.materials.plastics');
Route::get('/production/materials/pp','ProductionController@moldingMaterialsPP')->name('production.moulding.materials.pp');
Route::get('/production/materials/abs','ProductionController@moldingMaterialsABS')->name('production.moulding.materials.abs');
Route::get('/production/materials/nylon','ProductionController@moldingMaterialsNylon')->name('production.moulding.materials.nylon');
Route::get('/production/materials/hdpe','ProductionController@moldingMaterialsHDPE')->name('production.moulding.materials.hdpe');
Route::get('/production/materials/pc','ProductionController@moldingMaterialsPC')->name('production.moulding.materials.pc');
Route::get('/production/materials/pe','ProductionController@moldingMaterialsPE')->name('production.moulding.materials.pe');
//  Molding->Auxillaries 1.4
Route::get('/production/molding/auxillaries/chiller','ProductionController@auxillariesChiller')->name('production.moulding.auxillaries.chiller');
Route::get('/production/molding/auxillaries/coolingtower','ProductionController@auxillariesCoolingTower')->name('production.moulding.auxillaries.coolingtower');
Route::get('/production/molding/auxillaries/modtempcontroller','ProductionController@auxillariesModTempController')->name('production.moulding.auxillaries.modtempcontroller');
Route::get('/production/molding/auxillaries/hotrunnertempcontroller','ProductionController@auxillariesHotRunnerTempController')->name('production.moulding.auxillaries.hotrunnertempcontroller');
Route::get('/production/molding/auxillaries/matdryingdehumid','ProductionController@auxillariesMaterialDryingDeHumid')->name('production.moulding.auxillaries.materialdryingdehumid');

//  Prodution->Epp
Route::get('/production/epp','ProductionController@epp')->name('production.epp');
//  EPP -> Machines 3.1
Route::get('/production/epp/machines/process','ProductionController@epp_process')->name('production.epp.process');
Route::get('/production/epp/machines/impregnation','ProductionController@epp_impregnation')->name('production.epp.impregnation');
Route::get('/production/epp/machines/oven','ProductionController@epp_oven')->name('production.epp.oven');
Route::get('/production/epp/machines/history','ProductionController@epp_history')->name('production.epp.history');

//  Paintshop
Route::get('/production/paintshop','ProductionController@paintshop')->name('production.paintshop');
//  Paintshop -> robot
Route::get('/production/paintshop/robot/yaskawarobots','ProductionController@paintshopMachineYaskawaRobot')->name('production.paintshop.robot.yaskawarobots');
Route::get('/production/paintshop/robot/dx100prog','ProductionController@paintshopMachineDX100Prog')->name('production.paintshop.robot.dx100prog');
Route::get('/production/paintshop/robot/dx200prog','ProductionController@paintshopMachineDX200Prog')->name('production.paintshop.robot.dx200prog');
//  Paintshop -> painting equipments
Route::get('/production/paintshop/paintingequipment/sprayguns','ProductionController@paintEquipmentsSprayGuns')->name('production.paintshop.paintingequipments.sprayguns');
Route::get('/production/paintshop/paintingequipment/paintpumps','ProductionController@paintEquipmentsPaintPumps')->name('production.paintshop.paintingequipments.paintpumps');
//  Paintshop -> chemical
Route::get('/production/paintshop/chemical/paint','ProductionController@chemicalPaint')->name('production.paintshop.chemical.paint');
Route::get('/production/paintshop/chemical/hardener','ProductionController@chemicalHardner')->name('production.paintshop.chemical.hardner');
Route::get('/production/paintshop/chemical/thinner','ProductionController@chemicalThinner')->name('production.paintshop.chemical.thinner');
Route::get('/production/paintshop/chemical/ipa','ProductionController@chemicalIPA')->name('production.paintshop.chemical.ipa');
//  Paintshop -> airfilteration
Route::get('/production/paintshop/airfilteration/meshfilter','ProductionController@airfilterationMeshFilter')->name('production.paintshop.airfilteration.meshfilter');
Route::get('/production/paintshop/airfilteration/bagfilter','ProductionController@airfilterationBagFilter')->name('production.paintshop.airfilteration.bagfilter');
Route::get('/production/paintshop/airfilteration/ceilingfilter','ProductionController@airfilterationCeilingFilter')->name('production.paintshop.airfilteration.ceilingfilter');
//  Paintshop -> ovens
Route::get('/production/paintshop/oven/iroven','ProductionController@ovenIrOven')->name('production.paintshop.oven.iroven');
Route::get('/production/paintshop/oven/uvoven','ProductionController@ovenUvOven')->name('production.paintshop.oven.uvoven');
//  Paintshop -> spray booth
Route::get('/production/paintshop/spraybooth/airflow','ProductionController@sprayAirflow')->name('production.paintshop.spraybooth.airflow');
Route::get('/production/paintshop/spraybooth/watercurtain','ProductionController@sprayWaterCurtain')->name('production.paintshop.spraybooth.watercurtain');
Route::get('/production/paintshop/spraybooth/paintfilters','ProductionController@sprayPaintFilters')->name('production.paintshop.spraybooth.paintfilters');
Route::get('/production/paintshop/spraybooth/conveyor','ProductionController@sprayConveyor')->name('production.paintshop.spraybooth.conveyor');
Route::get('/production/paintshop/spraybooth/paintingjigs','ProductionController@sprayPaintingJigs')->name('production.paintshop.spraybooth.paintingjigs');

//  Lamps
Route::get('/production/lamps','ProductionController@lamps')->name('production.lamps');
//  Lamps -> tests
Route::get('/production/lamps/tests/airleaktester','ProductionController@lampsTestsAirleakTester')->name('production.lamps.tests.airleak');
//  lamps -> Scara Robot
Route::get('/production/lamps/machines/scararobot','ProductionController@lampsMachineSacraRobot')->name('production.lamps.machines.scararobot');

//  Lamps -> process
Route::get('/production/lamps/process/plasmasurfacetreatment','ProductionController@lampsProcessPlasmaSurfaceTreatment')->name('production.lamps.process.plasmasurfacetreatment');
Route::get('/production/lamps/process/adhesivebonding','ProductionController@lampsProcessAdhesiveBonding')->name('production.lamps.process.adhesivebonding');
Route::get('/production/lamps/process/metalplasticwelding','ProductionController@lampsProcessMetalPlasticWelding')->name('production.lamps.process.metalplasticwelding');
Route::get('/production/lamps/process/ultrasonicwelding','ProductionController@lampsProcessUltraSonicWelding')->name('production.lamps.process.ultrasonicwelding');
Route::get('/production/lamps/process/hotplatewelding','ProductionController@lampsProcessHotPlateWelding')->name('production.lamps.process.hotplatewelding');
Route::get('/production/lamps/process/annealingofplastic','ProductionController@lampsProcessAnnealingPlastic')->name('production.lamps.process.annealingofplastic');

//  Vacuum Metailizing
Route::get('/production/vacmet','ProductionController@vacuumMetalizing')->name('production.vacmet');
Route::get('/production/vacmet/material/aluminium','ProductionController@vacuumMetalizingMaterialAluminium')->name('production.vacmet.material.aluminium');
Route::get('/production/vacmet/material/tungesten','ProductionController@vacuumMetalizingMaterialTungesten')->name('production.vacmet.material.tungesten');
Route::get('/production/vacmet/material/siliconoil','ProductionController@vacuumMetalizingMaterialSiliconOil')->name('production.vacmet.material.siliconoil');
Route::get('/production/vacmet/machine/vacpump','ProductionController@vacuumMetalizingMaterialvacpump')->name('production.vacmet.machine.vacpump');
Route::get('/production/vacmet/machine/vacgauge','ProductionController@vacuumMetalizingMaterialvacgauge')->name('production.vacmet.machine.vacgauge');
Route::get('/production/vacmet/machine/vacmmp','ProductionController@vacuumMetalizingMaterialvacmmp')->name('production.vacmet.machine.vacmmp');
Route::get('/production/vacmet/cleanroom/airfilteration','ProductionController@vacuumMetalizingCleanRoomAirFilteration')->name('production.vacmet.cleanroom.airfilteration');

//  Vibration Welding
Route::get('/production/vibweld','ProductionController@vibweld')->name('production.vibweld');
Route::get('/production/vibweld/basics/process','ProductionController@vibweldBasicsProcess')->name('production.vibweld.basics.process');
Route::get('/production/vibweld/basics/test','ProductionController@vibweldBasicsTest')->name('production.vibweld.basics.test');

Route::get('/profile','FrontEndController@profile')->name('profile');

Route::get('/underconstruction','FrontEndController@underconstruction')->name('underconstruction');

Auth::routes(['register' => false, 'reset' => false , 'verify' => false]);

Route::get('/home', 'HomeController@index')->name('home');
