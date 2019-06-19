<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function production(){
        return view('production');
    }

    //  Epp
    //--------------------------------------------//
    public function epp()
    {
        return view('production.epp.index');
    }
    public function epp_process()
    {
        return view('production.epp.process');
    }
    public function epp_impregnation()
    {
        return view('production.epp.impregnation');
    }
    public function epp_oven()
    {
        return view('production.epp.oven');
    }
    public function epp_history()
    {
        return view('production.epp.history');
    }

    
    //  Paintshop
    //---------------------------------------------//
    public function paintshop()
    {
        return view('production.paintshop.index');
    }
    public function paintshop_materials()
    {
        return view('production.paintshop.materials');
    }
    public function paintshop_iroven()
    {
        return view('production.paintshop.ovenir');
    }
    public function paintshop_robot()
    {
        return view('production.paintshop.robot');
    }
    public function paintshop_sprayboothahu()
    {
        return view('production.paintshop.spraybooth');
    }
    public function paintshop_sprayguns()
    {
        return view('production.paintshop.spraygun');
    }
    public function paintshop_conveyors()
    {
        return view('production.paintshop.paintconveyor');
    }

    //  Moulding
    //-------------------------------------------------------------//
    public function molding() 
    {
        return view('production.molding.index');
    }
    //  Molding -> Machines
    public function molding_gendesign()
    {
        return view('production.molding.mold_gendesign');
    }
    public function molding_injectionunit()
    {
        return view('production.molding.mold_injectionunit');
    }
    public function molding_clampingunit()
    {
        return view('production.molding.mold_clampingunit');
    } 
    public function molding_processtroubleshoot(){
        return view('production.molding.mold_processtroubleshoot');
    }
    public function molding_energy()
    {
        return view('production.molding.mold_energy');
    }
    public function molding_efficiency()
    {
        return view('production.molding.mold_efficiency');
    }
    public function molding_hydraulics()
    {
        return view('production.molding.mold_hydraulics');
    }
    public function molding_controlpanel()
    {
        return view('production.molding.mold_plc');
    }
    public function molding_processparam()
    {
        return view('production.molding.mold_processparam');
    }
    public function molding_matpartmovement()
    {
        return view('production.molding.mold_matpartmovement');
    }


    //  Molding -> Molds
    public function molding_moldtype()
    {
        return view('production.molding.mold_type');
    }
    public function molding_runner()
    {
        return view('production.molding.mold_runner');
    }
    public function molding_gatting()
    {
        return view('production.molding.mold_gatting');
    }
    public function molding_components()
    {
        return view('production.molding.mold_component');
    }
    public function molding_maintenance()
    {
        return view('production.molding.mold_maintenance');
    }

    // Molding -> Materials
    public function molding_materials()
    {
        return view('production.molding.materials');
    }

    //  Production -> Lamps
    public function lamps()
    {
        return view('production.lamps.index');
    }

    public function lampsTestsAirleakTester()
    {
        return view('production.lamps.tests_airleaktester');
    }
  
    public function lampsMachineSacraRobot()
    {
        return view('production.lamps.machines_scararobot');
    }
  
    public function lampsProcessPlasmaSurfaceTreatment()
    {
        return view('production.lamps.process_plasmasurfacetreatment');
    }
  
    public function lampsProcessAdhesiveBonding()
    {
        return view('production.lamps.process_adhesivebonding');
    }
  
    public function lampsProcessMetalPlasticWelding()
    {
        return view('production.lamps.process_metalplasticwelding');
    }
  
    public function lampsProcessUltraSonicWelding()
    {
        return view('production.lamps.process_ultrasonicwelding');
    }
  
    public function lampsProcessHotPlateWelding()
    {
        return view('production.lamps.process_hotplatewelding');
    }
  
    public function lampsProcessAnnealingPlastic()
    {
        return view('production.lamps.process_annealing');
    }
  
 
    
   
  
   




  
}
