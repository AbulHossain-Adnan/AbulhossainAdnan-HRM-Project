<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DepartmentController;
use App\Departmentt;
use Carbon\Carbon;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=Departmentt::OrderBy('id', 'DESC')->get();
       return Response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.index',[
            'departments'=>Departmentt::all()
        ]);
    }

    public function store(Request $request)
    {



        $request->validate([
            'department'=>'required',
        ]);
        Departmentt::insert([
            'department'=>$request->input('department'),
            'created_at'=>Carbon::now(),
        ]);
       return Response()->json(['success'=>'succfully done']);
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
    
        $data=Departmentt::findOrFail($id);
    return Response()->json($data);
    }


    public function update(Request $request, $id)
    {
      

       
    }

 
    public function destroy($id)
    {
        Departmentt::findOrFail($id)->delete();
        return Response()->json(['success'=>'data deleted']);


    }
    public function updated(request $request){
        $dataid=$request->id;
        $data=Departmentt::findOrFail($dataid);
         $data->update([
            'department'=>$request->input('department'),
            'created_at'=>Carbon::now(),
        ]);
       return Response()->json(['success'=>'succfully done']);
    }

}
