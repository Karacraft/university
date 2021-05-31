<?php

// Direct Loaded Views
// Route::view('myroute','myroute',["name" => "Ali Jibran"]);
// Route::redirect('/myroute', '/', 301); // Redirect Route
Route::view('aaic','aaic')->name('aaic');
Route::view('ait','ait')->name('ait');
Route::view('abs','abs')->name('abs');
// Main Landing Page
Route::get('/','FrontEndController@index')->name('index');

// TODO: Check and refactor
Route::get('/opsorfin','FrontEndController@opsOrFin')->name('opsorfin');              //  Page with links to Operation or Finance

//  Production
Route::view('production','production')->name('production');
//  Molding
Route::view('production/molding','production.molding.index')->name('production.molding');
//  Molding => Machines 1.1
Route::prefix('production/molding/machines')->group( function() {
    Route::view('/gendesign','production.molding.mold_gendesign')->name('production.molding.gendesign');
    Route::view('/injectunit','production.molding.mold_injectionunit')->name('production.molding.injectunit');
    Route::view('/clampingunit','production.molding.mold_clampingunit')->name('production.molding.clampingunit');
    Route::view('/processtroubleshoot','production.molding.mold_processtroubleshoot')->name('production.molding.processtroubleshoot');
    Route::view('/energy','production.molding.mold_energy')->name('production.molding.energy');
    Route::view('/efficiency','production.molding.mold_efficiency')->name('production.molding.efficiency');
    Route::view('/hydraulics','production.molding.mold_hydraulics')->name('production.molding.hydraulics');
    Route::view('/controlpanel','production.molding.mold_plc')->name('production.molding.controlpanel');
    Route::view('/processparam','production.molding.mold_processparam')->name('production.molding.processparam');
    Route::view('/matpartsmovement','production.molding.mold_matpartmovement')->name('production.molding.matpartsmovement');
});
//  Molding => Molds 1.2
Route::prefix('production/molding/molds')->group(function() {
    Route::view('/moldtype','production.molding.mold_type')->name('production.molding.moldtype');
    Route::view('/runner','production.molding.mold_runner')->name('production.molding.runner');
    Route::view('/gatting','production.molding.mold_gatting')->name('production.molding.gatting');
    Route::view('/components','production.molding.mold_component')->name('production.molding.component');
    Route::view('/maintenance','production.molding.mold_maintenance')->name('production.molding.maintenance');
});
//  Molding->Materials 1.3
Route::prefix('production/molding/materials')->group(function(){
    Route::view('/plastics','production.molding.materials_plastics')->name('production.moulding.materials.plastics');
    Route::view('/pp','production.molding.materials_pp')->name('production.moulding.materials.pp');
    Route::view('/abs','production.molding.materials_abs')->name('production.moulding.materials.abs');
    Route::view('/nylon','production.molding.materials_nylon')->name('production.moulding.materials.nylon');
    Route::view('/hdpe','production.molding.materials_hdpe')->name('production.moulding.materials.hdpe');
    Route::view('/pc','production.molding.materials_pc')->name('production.moulding.materials.pc');
    Route::view('/pe','production.molding.materials_pe')->name('production.moulding.materials.pe');
});
//  Molding->Auxillaries 1.4
Route::prefix('production/molding/auxillaries')->group(function(){
    Route::view('/chiller','production.molding.auxillaries_chiller')->name('production.moulding.auxillaries.chiller');
    Route::view('/coolingtower','production.molding.auxillaries_coolingtower')->name('production.moulding.auxillaries.coolingtower');
    Route::view('/modtempcontroller','production.molding.auxillaries_modtempcontroller')->name('production.moulding.auxillaries.modtempcontroller');
    Route::view('/hotrunnertempcontroller','production.molding.auxillaries_hotrunnertempcontroller')->name('production.moulding.auxillaries.hotrunnertempcontroller');
    Route::view('/matdryingdehumid','production.molding.auxillaries_matdrydhumidunit')->name('production.moulding.auxillaries.materialdryingdehumid');
});
//  Prodution->Epp
Route::view('production/epp','production.epp.index')->name('production.epp');
//  EPP -> Machines 3.1
Route::prefix('production/epp/machines')->group(function() {
    Route::view('/process','production.epp.process')->name('production.epp.process');
    Route::view('/impregnation','production.epp.impregnation')->name('production.epp.impregnation');
    Route::view('/oven','production.epp.oven')->name('production.epp.oven');
    Route::view('/history','production.epp.history')->name('production.epp.history');
});
//  Paintshop
Route::view('/production/paintshop','production.paintshop.index')->name('production.paintshop');
Route::prefix('production/paintshop')->group(function(){
    //  Paintshop -> robot
    Route::view('/robot/yaskawarobots','production.paintshop.robot_yaskawarobots')->name('production.paintshop.robot.yaskawarobots');
    Route::view('/robot/dx100prog','production.paintshop.robot_nx100prog')->name('production.paintshop.robot.nx100prog');
    Route::view('/robot/dx200prog','production.paintshop.robot_dx200prog')->name('production.paintshop.robot.dx200prog');
    //  Paintshop -> painting equipments
    Route::view('/paintingequipment/sprayguns','production.paintshop.paintingequipment_sprayguns')->name('production.paintshop.paintingequipments.sprayguns');
    Route::view('/paintingequipment/paintpumps','production.paintshop.paintingequipment_paintpump')->name('production.paintshop.paintingequipments.paintpumps');
    //  Paintshop -> chemical
    Route::view('/chemical/paint','production.paintshop.chemical_paint')->name('production.paintshop.chemical.paint');
    Route::view('/chemical/hardener','production.paintshop.chemical_hardener')->name('production.paintshop.chemical.hardner');
    Route::view('/chemical/thinner','production.paintshop.chemical_thinners')->name('production.paintshop.chemical.thinner');
    Route::view('/chemical/ipa','production.paintshop.chemical_ipa')->name('production.paintshop.chemical.ipa');
    //  Paintshop -> airfilteration
    Route::view('/airfilteration/meshfilter','production.paintshop.airfiltration_meshfilter')->name('production.paintshop.airfilteration.meshfilter');
    Route::view('/airfilteration/bagfilter','production.paintshop.airfiltration_bagfilter')->name('production.paintshop.airfilteration.bagfilter');
    Route::view('/airfilteration/ceilingfilter','production.paintshop.airfiltration_ceilingfilter')->name('production.paintshop.airfilteration.ceilingfilter');
    //  Paintshop -> ovens
    Route::view('/oven/iroven','production.paintshop.oven_iroven')->name('production.paintshop.oven.iroven');
    Route::view('/oven/uvoven','production.paintshop.oven_uvoven')->name('production.paintshop.oven.uvoven');
    //  Paintshop -> spray booth
    Route::view('/spraybooth/airflow','production.paintshop.spraybooth_airflow')->name('production.paintshop.spraybooth.airflow');
    Route::view('/spraybooth/watercurtain','production.paintshop.spraybooth_watercurtain')->name('production.paintshop.spraybooth.watercurtain');
    Route::view('/spraybooth/paintfilters','production.paintshop.spraybooth_paintfilters')->name('production.paintshop.spraybooth.paintfilters');
    Route::view('/spraybooth/conveyor','production.paintshop.spraybooth_conveyors')->name('production.paintshop.spraybooth.conveyor');
    Route::view('/spraybooth/paintingjigs','production.paintshop.spraybooth_paintingjigs')->name('production.paintshop.spraybooth.paintingjigs');
});
//  Lamps
Route::view('/production/lamps','production.lamps.index')->name('production.lamps');
Route::prefix('/production/lamps')->group(function(){
    //  Lamps -> tests
    Route::view('/tests/airleaktester','production.lamps.tests_airleaktester')->name('production.lamps.tests.airleak');
    //  lamps -> Scara Robot
    Route::view('/machines/scararobot','production.lamps.machines_scararobot')->name('production.lamps.machines.scararobot');
    //  Lamps -> process
    Route::view('/process/plasmasurfacetreatment','production.lamps.process_plasmasurfacetreatment')->name('production.lamps.process.plasmasurfacetreatment');
    Route::view('/process/adhesivebonding','production.lamps.process_adhesivebonding')->name('production.lamps.process.adhesivebonding');
    Route::view('/process/metalplasticwelding','production.lamps.process_metalplasticwelding')->name('production.lamps.process.metalplasticwelding');
    Route::view('/process/ultrasonicwelding','production.lamps.process_ultrasonicwelding')->name('production.lamps.process.ultrasonicwelding');
    Route::view('/process/hotplatewelding','production.lamps.process_hotplatewelding')->name('production.lamps.process.hotplatewelding');
    Route::view('/process/annealingofplastic','production.lamps.process_annealing')->name('production.lamps.process.annealingofplastic');
});





//  PPMC
Route::prefix('ppmc')->group(function() {
});
//  Quality
Route::prefix('quality')->group(function(){
});
//  ProductDevelopment
Route::prefix('productdevelopment')->group(function() {
});


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



Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact IT Department.'
    ],404);
});

Route::get('timer',function(){
    // return date('Y-m-d h:m:s',strtotime('2020-07-14T09:02:08.000000Z'));
    return date(now());
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
