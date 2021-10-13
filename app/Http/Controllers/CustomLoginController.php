<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomLoginController;

class CustomLoginController extends Controller
{
    public function newlogin(){
        return view('newlogin');
    }
}
