<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Redirect;

/**
 * Description:
 * desarrollado: Crhistian David Vargas T
 * date: 29/10/2020
 */



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    	return view('backend.pages.dashboard');
    }

 
    

}
