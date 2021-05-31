<?php

namespace App\Http\Controllers;

use App\Http\Requests\PowerBiLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class FrontEndController extends Controller
{
    //  Shows Main page
    public function index(){
        // return view('test.index');
        return view('index');   
    }
    public function index2(){return view('index2');}
    
    public function opsOrFin(){return view('opsorfin');}
    //  Powerbi Login Faker
    public function showpowerbilogin(){return view('powerbilogin');}
    
    public function underconstruction(){return view('underconstruction');}
  
    public function machine(){return view('production.machine');}

    public function profile(){return view('profile');}

    public function powerbilogin(PowerBiLoginRequest $request)
    {
        dd($request->all());
        $email = $request->email;
        $password = $request->password;

        //  Locate User & Password
        //  Validation via PowerBiLoginRequest
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
        return view('opsorfin');
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

}
