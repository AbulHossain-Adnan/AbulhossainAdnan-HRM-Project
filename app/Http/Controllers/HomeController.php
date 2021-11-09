<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home',[
            'profile'=>Auth::user()->profilee
        ]);
    }
    public function profile()
    {
        return view('profile',[
            'user'=>Auth::user()
        ]);
    }

   
}
