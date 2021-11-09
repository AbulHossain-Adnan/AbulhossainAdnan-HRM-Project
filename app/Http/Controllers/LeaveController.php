<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LeaveController;
use App\Leave;
use App\Leave_type;

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
            'user'=>Auth::user(),
            'leave_types'=>Leave_type::all()
        ]);
    }


    public function store(Request $request)
    {
        // dd($request->all());
        // die();
        
                $request->validate([
            'startdate'=>'required',
            'leave_type'=>'required',
            'lreasion'=>'required',
        ]);


  $Leave_type_id=$request->leave_type;

  $leave_type_count=Leave::where('user_id',$request->user_id)->where('leavetype',$Leave_type_id)->count();
$leave_type=Leave_type::where('leave_type',$Leave_type_id)->first();
$leave_number=$leave_type->leave_number;

if($leave_type_count < $leave_number){
    Leave::insert([
            'startdate'=>$request->startdate,
            'enddate'=>$request->enddate, 
            'user_id'=>$request->user_id,
            'leavetype'=>$request->leave_type,
            'leavereason'=>$request->lreasion,
            'half_day'=>$request->half_day,

            'created_at'=>Carbon::now(),
        ]);
    toast('Your leave request applyed Successfully','success');
        return redirect()->route('leave.index');
}
else{
    toast('You dont have this leave type','error');
    return back();
}


      
      

      
      
  


       
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

        $data=Leave::with('user')->find($id);
        return response()->json($data);

    }
    public function destroy($id){
        leave::findOrFail($id)->delete();
        return back()->with('success','data deleted Successfully');
    }
    public function addleave(Request $request){
       $data=dd($request->all());
        return response()->json($data);


    }

}
