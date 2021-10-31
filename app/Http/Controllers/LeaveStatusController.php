<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LeaveStatusController;
use App\Leave;

class LeaveStatusController extends Controller
{
    public function active($id){
       $data=Leave::find($id);
       $data->update(['status'=>3]);
 toast('Leave Request Successfully Cancled','success');
       return back();
    }
    public function inactive($id){
        $data=Leave::find($id);
        $data->update(['status'=>1]);
        toast('Leave Request Successfully Approved','success');
        return back();
    }
  
}
