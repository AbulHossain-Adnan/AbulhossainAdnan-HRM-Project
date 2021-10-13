<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdmindashboardController;

class AdmindashboardController extends Controller
{
    public function index(){
        // Auth()->logout();
        return view('admin.dashboard');
       
    }
}
