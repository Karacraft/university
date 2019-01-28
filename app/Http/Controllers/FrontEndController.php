<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    protected $productArray = ['moulding','epp','sw','vm','two-wheeler','paintshop'
        ,'hcp','chrome','molding','gentsassy','ladiesassy','lamps','abm'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login'); 
    }

    public function login(Request $request)
    {
        // dd ($request->all());
        //  For time being, move user to Dashboard
        return redirect()->route('landing');
    }

    public function landing()
    {
        //Landing has Department Navigation
        return view('landing');
    }

    public function underconstruction()
    {
        return view('underconstruction');
    }

    public function production()
    {
        return view('production');
    }
  
    public function machine()
    {
        return view('production.machine');
    }

    public function profile()
    {
        return view('profile');
    }
}
