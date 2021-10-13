<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StatusssController;
use App\User;
use Alert;

class StatusssController extends Controller
{
    public function active($id){
        $data= User::find($id);

 $data= User::find($id);
 if($data->status == 1){
     $data->status= 0;
     $data->save();
     toast('Status update Successfully','success');
     return back();
   

     
 }
 else{
    return back();
}
       die();
        if(User::find($id)->status==false){
            User::find($id)->update([
                'status'==true
            ]);
            toast('Status update Successfully','success');

            // return redirect()->route('user.index');
            echo "done";
    }
}
public function inactive($id){

    $data= User::find($id);

    $data= User::find($id);
    if($data->status == 0){
        $data->status= 1;
        $data->save();
        toast('Status update Successfully','success');
        return back();
        
    }
    

    die();
    if(User::find($id)->status==true){
        User::find($id)->update([
            'status'=>'false'
        ]);
        toast('Status update Successfully','success');

        echo "done";
    }

}
}

