<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NoticeController;
use App\Notice;
use Carbon\Carbon;

class NoticeController extends Controller
{

    public function index()
    {
        
      $data=Notice::OrderBy('id','DESC')->get();
      return response()->json($data);
      
    }


    public function create()
    {
        return view('Notice.index');
    }

 
    public function store(Request $request)
    {
  
        Notice::insert([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'created_at'=>Carbon::now(),
        ]);
       return response()->json(['success'=>'succfully']);
    }


    public function show($id)
    {
      return view('Notice.show',[
          'notices'=>Notice::find($id)
      ]);
    }


    public function edit($id)
    {
        $data=Notice::findOrFail($id);
        return response()->json($data);
    }


    public function updated(Request $request)
    {
   
        $dataid=$request->input('id');
        $data=Notice::findOrFail($dataid);
        $data->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
        ]);
        return response()->json(['success'=>'succfully']);
    }


    public function destroy($id)
    {
        Notice::findOrFail($id)->delete();
        return response()->json(['success'=>'succfully']);
    }
}
