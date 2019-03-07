<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class FrontEndController extends Controller
{
    //  Shows Main page
    public function index()
    {
        return view('index'); 
    }

    public function secondary()
    {
        return view('secondary');
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

    //  Powerbi Login Faker
    public function showpowerbilogin()
    {
        return view('powerbilogin');
    }

    public function powerbilogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = in_array($request->email,Config::get('university.authorized','default'));
        $password = in_array($request->password,Config::get('university.password','default'));
        
        if(!$email)
        {
            return redirect()->back()->withErrors(array('email' => 'Email address is not in system!'))->withInput();
        }

        if(!$password)
        {
            return redirect()->back()->withErrors(array('password' => 'Password is not correct!'))->withInput();
        }
        // return compact('email','password');
        return redirect('https://app.powerbi.com/view?r=eyJrIjoiMjAyYWRlOGMtOTM1Ny00M2FkLWEwZTUtZWVlOGNjOTE2Njk1IiwidCI6IjdmMmY4ZTY3LWFiZjYtNDgyZS04MWI2LWQ2OWY2MTQxZTEzMyIsImMiOjl9');
        // dd($request->all());
        $authorized = Config::get('university.authorized', 'default');
        return $authorized;
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
