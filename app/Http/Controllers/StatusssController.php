<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StatusssController;
use App\User;
use Alert;
use App\Notifications\UserApprovalnotification;

class StatusssController extends Controller
{


    public function active($id){


 $user= User::find($id);
 $user->update(['status'=>0]);
  toast('Status update Successfully','success');

     return back();

}
public function inactive($id){

 $user= User::find($id);
 $user->update(['status'=>1]);
 $user->notify(new UserApprovalnotification());
  toast('Status update Successfully','success');
     return back();

}
}

