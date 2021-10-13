<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomRegisterController;
use App\User;

class CustomRegisterController extends Controller
{
    public function newregister(){
        return view('newregister');
    }
    public function newregisterpost(Request $Request){
       User::insert([
           'name'=>$Request->name,
           'email'=>$Request->email,
           'password'=>bcrypt($Request->password),
       ]);
       return redirect()->route('login');
    }
}
