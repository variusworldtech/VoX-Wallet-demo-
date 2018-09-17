<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\User;

class cardController extends Controller
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

    public function index()
    {

    }

    public function store()
    {
        //save logic 
        
        return view('cardapplied');
    }
    
}