<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EmployeedashboardController;

class EmployeedashboardController extends Controller
{
    public function index(){
        return view('employee.dashboard');
    }
    
}
