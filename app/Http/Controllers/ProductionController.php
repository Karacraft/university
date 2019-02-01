<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function production()
    {
        return view('production');
    }


    //  Epp
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
    public function moulding()
    {
        return view('production.moulding.index');
    }
    public function moulding_materials()
    {
        return view('production.moulding.materials');
    }
    public function moulding_mouldtype()
    {
        return view('production.moulding.mouldtype');
    }
    public function moulding_runner()
    {
        return view('production.moulding.runner');
    }
    public function moulding_gatting()
    {
        return view('production.moulding.mould_gatting');
    }
    public function moulding_injectunit()
    {
        return view('production.moulding.mould_injectionunit');
    }
    public function moulding_gendesign()
    {
        return view('production.moulding.mould_gendesign');
    }
    public function moulding_clampingunit()
    {
        return view('production.moulding.mould_clampingunit');
    } 
    public function moulding_processtroubleshoot(){
        return view('production.moulding.processtroubleshoot');
    }
}
