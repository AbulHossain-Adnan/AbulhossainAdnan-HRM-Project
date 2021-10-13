<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LeaveController;
use App\Leave;
use Carbon\Carbon;
use Auth;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('leave.create',[
            'user'=>Auth::user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $request->validate([
            'ldate'=>'required',
            'ltype'=>'required',
            'lreasion'=>'required',
        ]);

        Leave::insert([
            'leavedate'=>$request->ldate,
            'user_id'=>$request->user_id,
            'leavetype'=>$request->ltype,
            'leavereasion'=>$request->lreasion,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
