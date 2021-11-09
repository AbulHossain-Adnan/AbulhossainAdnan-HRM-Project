<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendence;
use Auth;
use Carbon\Carbon;
use App\Profile;
use DateTime;

class AttendenceController extends Controller
{
    public function index(){
        $id=Auth::id();
        return view('attendence/index',[
            'profiles'=>Profile::where('user_id',$id)->first()
        ]);
    }
    public function clockin(Request $request){




$date1 = new DateTime("06:00:00");
$date2 = new DateTime(" 10:23:45");
$difference = $date1->diff($date2);
$diffInSeconds = $difference->s; //45
$diffInMinutes = $difference->i; //23
$diffInHours   = $difference->h; //8
$diffInDays    = $difference->d; //21
$diffInMonths  = $difference->m; //4
$diffInYears   = $difference->y; //1
// Carbon::now()->isoFormat('LL')

//or get Date difference as total difference
//METHOD-2
$d1 = strtotime("00:00:00");
$d2 = strtotime("01:23:45");
$totalSecondsDiff = abs($d1+$d2); //42600225
$totalMinutesDiff = $totalSecondsDiff/60; //710003.75
$totalHoursDiff   = $totalSecondsDiff/60/60;//11833.39
$totalDaysDiff    = $totalSecondsDiff/60/60/24; //493.05
$totalMonthsDiff  = $totalSecondsDiff/60/60/24/30; //16.43
$totalYearsDiff   = $totalSecondsDiff/60/60/24/365; //1.35

        date_default_timezone_set("Asia/Dhaka");
        $data= new Attendence();
        $data->ip_address =$request->input('ip_address');
        $data->workfrom =$request->input('workfrom');
        $data->note =$request->input('note');

        $data->user_id=Auth::id();
        $data->user_name=Auth::user()->name;
        $data->date=Carbon::now()->isoFormat('LLL');
        $data->status=1;
        $data->clock_in=date("H:i:s");
        $data->clock_out="";
        $data->work_time="";
        $data->save();
        return response()->json($data);
    }
    public function allattendence(){
        $data=Attendence::where('user_id',Auth::id())->OrderBy('id','DESC')->get();
        return response()->json($data);

    }
    public function clockout($id){
       
         date_default_timezone_set("Asia/Dhaka");
          $data=Attendence::where('user_id',$id)->OrderBy('created_at','DESC')->first();
          $getdate1=$data->clock_in;
          $getdate2=date("H:i:s");

           $date1 = new DateTime($getdate1);
        $date2 = new DateTime($getdate2);
        $difference = $date1->diff($date2);
        $diffInHours   = $difference->h; //8
        $diffInMinutes   = $difference->i; //8
        $diffInSeconds = $difference->s;


          $data->update(['clock_out'=>date("H:i:s"),'work_time'=>$diffInHours.' '.'Hours'.' '.$diffInMinutes.' '.'Minite'.' '.$diffInSeconds.' '.'Second']);
          return response()->json($data);

    }
      
    public function adminindex(){
        return view('attendence/admin/index',[
            'attendences'=>Attendence::OrderBy('id','DESC')->get()]);

    }
    public function viewattendence($id){
        $data=Attendence::findOrFail($id);
        $alldata=Attendence::where('user_id',$data->user_id)->OrderBy('id','DESC')->get();
        return response()->json($alldata);
    }
}
