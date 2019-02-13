<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

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
        return redirect('https://login.microsoftonline.com/common/oauth2/authorize?client_id=871c010f-5e61-4fb1-83ac-98610a7e9110&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3dq-7A4vsjb3cA3laGzL15QV_SfT3uvRpk7n70s41zxyrJVyn-WpjDEdt4AD5icqYz3BTAnjhtl_98LNZ_5OZPiIBT-n71vv411ZBD2eGHK7UcZLQFvWQidV2P6CJKVMVjmv2zcCXm6G1pw2V4D7MrNQ&nonce=636856344385888025.MGU0ZWU3YTEtMTlmNy00ODlkLWI0ODEtMjA1YmU1NjUzYjNkNWI4MzViZjktNTRmYi00ZTc4LWJjODgtZTlhMmJmMTE5YzBh&site_id=500453&redirect_uri=https%3a%2f%2fapp.powerbi.com%2f%3fnoSignUpCheck%3d1&post_logout_redirect_uri=https%3a%2f%2fapp.powerbi.com%2f%3fnoSignUpCheck%3d1&resource=https%3a%2f%2fanalysis.windows.net%2fpowerbi%2fapi&nux=1&msafed=0');
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
