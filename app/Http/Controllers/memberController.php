<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class memberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:member');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend.landing.body');
        return view('frontend.layout.master');
    }
}
