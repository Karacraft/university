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
    public function robotProgramming()
    {
        return view('production.paintshop.robot_programming');
    }

    public function paintshopMachineYaskawaRobot()
    {
        return view('production.paintshop.robot_yaskawarobots');
    }
    public function paintshopMachineDX100Prog()
    {
        return view('production.paintshop.robot_dx100prog');
    }
    public function paintshopMachineDX200Prog()
    {
        return view('production.paintshop.robot_dx200prog');
    }


    public function paintEquipmentsSprayGuns()
    {
        return view('production.paintshop.paintingequipment_sprayguns');
    }
    public function paintEquipmentsPaintPumps()
    {
        return view('production.paintshop.paintingequipment_paintpump');
    }
    public function chemicalPaint()
    {
        return view('production.paintshop.chemical_paint');
    }
    public function chemicalHardner()
    {
        return view('production.paintshop.chemical_hardener');
    }
    public function chemicalThinner()
    {
        return view('production.paintshop.chemical_thinners');
    }
    public function chemicalIPA()
    {
        return view('production.paintshop.chemical_ipa');
    }
    public function airfilterationMeshFilter()
    {
        return view('production.paintshop.airfiltration_meshfilter');
    }
    public function airfilterationBagFilter()
    {
        return view('production.paintshop.airfiltration_bagfilter');
    }
    public function airfilterationCeilingFilter()
    {
        return view('production.paintshop.airfiltration_ceilingfilter');
    }
    public function ovenIrOven()
    {
        return view('production.paintshop.oven_iroven');
    }
    public function ovenUvOven()
    {
        return view('production.paintshop.oven_uvoven');
    }
    public function sprayAirflow()
    {
        return view('production.paintshop.spraybooth_airflow');
    }
    public function sprayWaterCurtain()
    {
        return view('production.paintshop.spraybooth_watercurtain');
    }
    public function sprayPaintFilters()
    {
        return view('production.paintshop.spraybooth_paintfilters');
    }
    public function sprayConveyor()
    {
        return view('production.paintshop.spraybooth_conveyors');
    }
    public function sprayPaintingJigs()
    {
        return view('production.paintshop.spraybooth_paintingjigs');
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
    //  Molding -> Auxillaries
    public function auxillariesChiller()
    {
        return view('production.molding.auxillaries_chiller');
    }   
    public function auxillariesCoolingTower()
    {
        return view('production.molding.auxillaries_coolingtower');
    }
    public function auxillariesModTempController()
    {
        return view('production.molding.auxillaries_modtempcontroller');
    }
    public function auxillariesHotRunnerTempController()
    {
        return view('production.molding.auxillaries_hotrunnertempcontroller');
    }
    public function auxillariesMaterialDryingDeHumid()
    {
        return view('production.molding.auxillaries_matdrydhumidunit');
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
  
 
    //  Vacuum Metailizing
    public function vacuumMetalizing()
    {
        return view('production.vacuummetalizing.index');
    }
    public function vacuumMetalizingMaterialAluminium()
    {
        return view('production.vacuummetalizing.material_aluminium');
    }
    public function vacuumMetalizingMaterialTungesten()
    {
        return view('production.vacuummetalizing.material_tungsten');
    }
    public function vacuumMetalizingMaterialSiliconOil()
    {
        return view('production.vacuummetalizing.material_siliconoil');
    }
   
    public function vacuumMetalizingMaterialvacpump()
    {
        return view('production.vacuummetalizing.machine_vacuumpump');
    }
    public function vacuumMetalizingMaterialvacgauge()
    {
        return view('production.vacuummetalizing.machine_vacuumgauge');
    }
    public function vacuumMetalizingMaterialvacmmp()
    {
        return view('production.vacuummetalizing.machine_vacmmp');
    }
    public function vacuumMetalizingCleanRoomAirFilteration()
    {
        return view('production.vacuummetalizing.cleanroom_airfilteration');
    }
    public function vacuumMetalizingCleanRoomDressCode()
    {
        return view('production.vacuummetalizing.cleanroom_dresscode');
    }
   




  
}
