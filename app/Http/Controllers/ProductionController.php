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

    //  Paintshop
    public function paintshop()
    {
        return view('production.paintshop.index');
    }
    public function paintshop_materials()
    {
        return view('production.paintshop.materials');
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
}
