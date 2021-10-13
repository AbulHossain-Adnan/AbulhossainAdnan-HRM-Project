<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LeaveStatusController;
use App\Leave;

class LeaveStatusController extends Controller
{
    public function active($id){
       $data=Leave::find($id);
       if($data->status==1){
           $data->status=0;
           $data->save();
       }
       return back();
    }
    public function inactive($id){
        $data=Leave::find($id);
        if($data->status==0){
            $data->status=1;
            $data->save();
        }
        return back();
    }
  
}
