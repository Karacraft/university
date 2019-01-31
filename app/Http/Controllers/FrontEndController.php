<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    // protected $productArray = ['moulding','epp','sw','vm','two-wheeler','paintshop'
    //     ,'hcp','chrome','molding','gentsassy','ladiesassy','lamps','abm'];

   
    //  Shows Main page
    public function index()
    {
        return view('index'); 
    }

    //  Avt Business School
    public function abs()
    {
        return view('abs');
    }

    //  Avt Intelligent Tech
    public function ait()
    {
        return view('ait');
    }

    //  Login Page
    public function login(Request $request)
    {
        //  For time being, move user to Dashboard
        // return redirect()->route('landing');
    }

    public function underconstruction()
    {
        return view('underconstruction');
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
