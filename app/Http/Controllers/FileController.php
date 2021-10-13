<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FileController;
use App\File;
use App\User;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('file.index',[
            'files'=>File::OrderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create',[
            'users'=>User::all()
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
            'name'=>'required',
            'title'=>'required',
            'file'=>'required',
            'user_id'=>'required',
            
        ]);
      
            $profile_id=File::insertGetId([
                'name'=>$request->name,
                'title'=>$request->title,
                'file'=>$request->name,
                'user_id'=>$request->user_id,
            ]);
            $uploaded_photo=$request->file('file');
            $new_photo_name=$profile_id.'.'.$uploaded_photo->getClientOriginalExtension();
            $request->file->move('storege/',$new_photo_name);
            
            File::find($profile_id)->update([
                'file'=>$new_photo_name
            ]);
         return redirect()->back();

    

        
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
