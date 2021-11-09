<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Notice;
use App\Holiday;

class DashboardController extends Controller
{
    public function index(){
        return view('employee.dashboard',[
            'users'=>Auth::user(),
            'notices'=>Notice::OrderBy('id','desc')->limit(2)->get(),
            'holidays'=>Holiday::OrderBy('id','DESC')->limit(4)->get()
        ]);
    }
}
