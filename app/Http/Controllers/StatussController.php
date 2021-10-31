<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StatussController;
use App\Status;
use App\User;

class StatussController extends Controller
{

    public function create()
    {
        return view('status.create');
    }


    public function store(Request $request)
    {
       
        $request->validate([
            'status'=>'required',
        ]);
        Status::insert([
            'name'=>$request->status
        ]);
        return redirect()->route('status.create');
    }


    public function update(Request $request, $id)
    {
       if(User::find($id)->status==1){
           User::find($id)->update([
               'status'=>'2'
           ]);
           echo "done";
       }
        
       
      
    }

    public function destroy($id)
    {
        //
    }
}
