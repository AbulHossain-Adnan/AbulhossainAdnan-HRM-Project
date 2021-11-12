<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LeaveController;
use App\Leave;
use App\Leave_type;

use Carbon\Carbon;
use Auth;
use DB;

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
                'leave_types'=>Leave_type::all(),
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


  $Leave_type_id=$request->leave_type;

  $leave_type_count=Leave::where('user_id',Auth::id())->where('leavetype',$Leave_type_id)->count();
$leave_type=Leave_type::where('leave_type',$Leave_type_id)->first();
$leave_number=$leave_type->leave_number;

if($leave_type_count < $leave_number){
  $leave_type=$request->leave_type;
$date=$request->date;
$day=$request->half;
$reason=$request->reason;
if($day){
  for($i=0; $i < count($leave_type); $i++) {
    $datasave=[ 
        'user_id'=>Auth::id(),
        'date'=>$date[$i],
        'leavetype'=>$leave_type[$i],
        'leavereason'=>$reason[$i],
        'day'=>$day[$i],


    ];
    DB::table('leaves')->insert($datasave);

}
    toast('Your leave request applyed Successfully','success');
        return redirect()->route('leave.index');

  
}
else{
   for($i=0; $i < count($leave_type); $i++) {
    $datasave=[ 
        'user_id'=>Auth::id(),
        'date'=>$date[$i],
        'leavetype'=>$leave_type[$i],
        'leavereason'=>$reason[$i],


    ];
    DB::table('leaves')->insert($datasave);

}
    toast('Your leave request applyed Successfully','success');
        return redirect()->route('leave.index');  
}
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
