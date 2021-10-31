<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LeaveController;
use App\Leave;
use Carbon\Carbon;
use Auth;

class LeaveController extends Controller
{

    public function index()
    {
        if(Auth()->user()->role_id==1){
            return view('leave.index',[
                'leaves'=>Leave::OrderBy('id','desc')->get(),
            ]);

        }
        else{
            return view('leave.employeeindex',[
                'leaves'=>Auth::user()->leaves,
            ]);

            
        }
      
    }


    public function create()
    {
        
        return view('leave.create',[
            'user'=>Auth::user()
        ]);
    }


    public function store(Request $request)
    {
      
  
        $request->validate([
            'startdate'=>'required',
            'ltype'=>'required',
            'lreasion'=>'required',
        ]);

        Leave::insert([
            'startdate'=>$request->startdate,
            'enddate'=>$request->enddate, 
            'user_id'=>$request->user_id,
            'leavetype'=>$request->ltype,
            'leavereasion'=>$request->lreasion,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('leave.index');
    }


    public function show($id)
    {
        if(Auth::user()->role_id==1){
            return view('leave.adminshow',[
                'leaves'=>Leave::OrderBy('id','desc')->get(),
            ]);
        }
        else{
            return view('leave.adminshow',[
                'leaves'=>Auth::user()->leaves,
            ]);
        }
       
    }
    public function edit($id){
        $data=Leave::findOrFail($id)->with('user')->first();
        return response()->json($data);

    }
    public function destroy($id){
        leave::findOrFail($id)->delete();
        return back()->with('success','data deleted Successfully');
    }


}
