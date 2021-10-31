<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\User;
use App\Profile;
use App\Departmentt;
use App\Status;
use Auth;
use Carbon\Carbon;
use Image;
use Alert;

class ProfileController extends Controller
{

    public function index()
    {
        
        return view('profile.index',[
            'profiles'=>Profile::all()
        ]);
    }


    public function create()
    {
        return view('profile.create',[
            'users'=>User::where('role_id',2)->get(),
            'departments'=>Departmentt::all(),
            'statuses'=>Status::all(),
        ]);
    }

    public function store(Request $request)
    {
        
      
        $request->validate([
            'name'=>'required',
            'user_id'=>'required',
            'department'=>'required',
            'adress'=>'required',
            'salary'=>'required',
            'position'=>'required',
            'contact'=>'required',
            'image'=>'required',
         
            'joiningdate'=>'required',
            'exitedate'=>'required',
            
        ]);
      
            $profile_id=Profile::insertGetId([
                'name'=>$request->name,
                'user_id'=>$request->user_id,
                'department'=>$request->department,
                'adress'=>$request->adress,
                'salary'=>$request->salary,
                'position'=>$request->position,
                'contact'=>$request->contact,
                'image'=>$request->name,
              
                'joiningdate'=>$request->joiningdate,
                'exitedate'=>$request->exitedate,
                'created_at'=>Carbon::now(),
            ]);
            $uploaded_photo=$request->file('image');

            $new_photo_name=$profile_id.'.'.$uploaded_photo->getClientOriginalExtension();
            
            $new_photo_location= base_path('public/uploads/profile_photos/'.$new_photo_name);

            Image::make($uploaded_photo)->resize(500,500)->save($new_photo_location);
            Profile::find($profile_id)->update([
            'image'=>$new_photo_name
]);

        toast('Profile Added successfully','success');

        return redirect()->route('user.index');
    }

    public function show($id)
    {
       return view('profile.show',[
           'user'=>Profile::find($id)->user
       ]);
    }

    public function edit($id)
    {
        return view('profile.edit',[
            'profile'=>Profile::find($id),
            'users'=>User::all()
        ]);
       
    }


    public function update(Request $request, $id)
    
    {
        $request->validate([
            'name'=>'required',
            'user_id'=>'required',
            'department'=>'required',
            'adress'=>'required',
            'salary'=>'required',
            'contact'=>'required',
            'joiningdate'=>'required',
            'exitdate'=>'required',
            
        ]);
    
        Profile::find($id)->Update([
            'name'=>$request->name,
            'user_id'=>$request->user_id,
            'adress'=>$request->adress,        
            'contact'=>$request->contact,
            'joiningdate'=>$request->joiningdate,
            'exitedate'=>$request->exitdate,
            'department'=>$request->department,
            'salary'=>$request->salary,
            'position'=>$request->position,
        
               
        ]);
  
        if($request->hasfile('image')){


            $old_photo_delet= base_path('public/uploads/profile_photos/'.Profile::find($id)->image);
           unlink($old_photo_delet);

           $uploaded_photo = $request->file('image');
           $new_photo_name=$id.'.'.$uploaded_photo->getClientOriginalExtension();
           $new_photo_location= base_path('public/uploads/profile_photos/'.$new_photo_name);

           Image::make($uploaded_photo)->resize(600,470)->save($new_photo_location ,100);
           Profile::find($id)->update([
             'image'=>$new_photo_name,
           ]);

           
           
        }
        return back();
     
    
    }


    public function destroy($id)
    {
      Profile::find($id)->delete();
      return redirect()->route('profile.index');

    }
}
