<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Auth;
use App\User;
use Alert;

class UserController extends Controller
{

    public function index()
    {
        
        return view('user.index',[
            'users'=>User::where('role_id',2)->OrderBy('id','DESC')->with('profilee')->get()
        ]);
       
    }

    public function show($id)
    {

    
        if(User::find($id)->profilee){
            return view('user.show',[
                'users'=>User::find($id)->profilee
            ]);

        }
        else{
            toast('No Profile Added','warning');

            return back();
        }
       
    }


    public function destroy($id)
    {
       User::find($id)->delete();
       Alert::success('User deleted Successfully', 'Success Message');
       return back();
   
    }
}
