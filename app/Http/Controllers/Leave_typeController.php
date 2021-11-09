<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Leave_typeController;
use App\Leave_type;
use Carbon\Carbon;

class Leave_typeController extends Controller
{
   
     public function index()
    {
       return view('leave_type/index');
    }

  
    public function create()
    {
       $data=Leave_type::OrderBy('id', 'DESC')->get();
       return Response()->json($data); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'leave_type'=>'required',
            'leave_number'=>'required',

        ]);
        Leave_type::insert([
            'leave_type'=>$request->input('leave_type'),
            'leave_number'=>$request->input('leave_number'),
            'created_at'=>Carbon::now(),
        ]);
       return Response()->json(['success'=>'succfully done']);
    }

 


    public function edit($id)
    {
    
        $data=Leave_type::findOrFail($id);
    return Response()->json($data);
    }




 
    public function destroy($id)
    {
        Leave_type::findOrFail($id)->delete();
        return Response()->json(['success'=>'data deleted']);


    }
    public function updated(request $request){
        $dataid=$request->input('id');
        $data=Leave_type::findOrFail($dataid);
         $data->update([
            'leave_type'=>$request->input('leave_type'),
            'leave_number'=>$request->input('leave_number'),
            'created_at'=>Carbon::now(),
        ]);
       return Response()->json(['success'=>'succfully done']);
    }
}
