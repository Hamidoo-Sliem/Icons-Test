<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services; 
use App\Leadsrc as Src;
use App\Codes as Codx; 
use DB;

class ServicesController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
}
