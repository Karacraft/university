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
        return view('landing');
    }

    public function showpage($string)
    {
        // dd($string);
        switch ($string) {
            case 'production':
                return view('production');
                break;
            case 'delivery':
                # code...
                break;
            case 'material':
                # code...
                break;
            case 'equipment':
                # code...
                break;
            case 'plantss':
                # code...
                break;
            case 'pe':
                # code...
                break;
            case 'efficiency':
                # code...
                break;
            case 'qa':
                # code...
                break;
            case 'pd':
                # code...
                break;
            case 'it':
                # code...
                break;
            case 'hr':
                # code...
                break;
            case 'mrkt':
                # code...
                break;
            case 'admin':
                # code...
                break;
            case 'finance':
                # code...
                break;
            
            default:
                # code...
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
