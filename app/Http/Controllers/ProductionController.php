<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionController extends Controller
{
    //  Molding
    //  Epp
    //  Paintshop
    //  Lamps

    
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

    //  Vibration Welding
    public function vibweld()
    {
        return view('production.vibweld.index');
    }
    public function vibweldBasicsProcess()
    {
        return view('production.vibweld.basics_process');
    }
    public function vibweldBasicsTest()
    {
        return view('production.vibweld.basics_test');
    }

  
}
