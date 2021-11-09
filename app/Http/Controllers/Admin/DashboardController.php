<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\User;
use App\Departmentt;
use App\Expense;



class DashboardController extends Controller
{
    public function index(){
      
        return view('admin.dashboard',[
            'total_employee'=>User::where('role_id',1)->count(),
            'total_department'=>Departmentt::count(),
            'total_expense'=>Expense::sum('amount_price'),
        ]);
        Auth()->logout();
    }
}
