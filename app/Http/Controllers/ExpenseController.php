<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ExpenseController;
use App\Expense;

class ExpenseController extends Controller
{
  
    public function index()
    {
       $data= Expense::OrderBy('id','DESC')->get();
       return response()->json($data);
    }


    public function create()
    {
        return view('expense.index');
    }


    public function store(Request $request)
    { 
     
        $data=new Expense();
       $data->item_name=$request->input('item_name');
       $data->purchase_from=$request->input('purchase_from');
       $data->purchase_date=$request->input('purchase_date');
       $data->amount_price=$request->input('amount_price');

       if($request->hasfile('file')){
        $uploaded_photo=$request->file('file');
        $new_photo_name=time().'.'.$uploaded_photo->extension();
        $uploaded_photo->move(public_path('perchase_file/'),$new_photo_name);
        $data->file=$new_photo_name;
       }
       $data->save();
       return response()->json(['success'=>'succfully']);

    }


    public function edit($id)
    {
         $data=Expense::findOrFail($id);
      
       return response()->json($data);

    }


    public function updated(Request $request)
    {
        $data_id=$request->input('id');
        $data=Expense::findOrFail($data_id);
       $data->item_name=$request->input('item_name');
       $data->purchase_from=$request->input('purchase_from');
       $data->purchase_date=$request->input('purchase_date');
       $data->amount_price=$request->input('amount_price');

       if($request->hasfile('file')){
        $uploaded_photo=$request->file('file');
        $new_photo_name=time().'.'.$uploaded_photo->extension();
        $uploaded_photo->move(public_path('perchase_file/'),$new_photo_name);
        $data->file=$new_photo_name;
       }
       $data->update();
       return response()->json(['success'=>'succfully']);
    }

    public function destroy($id)
    {
        $dataid=Expense::findOrFail($id);
        unlink('perchase_file/'.$dataid->file);
        $dataid->delete();

    }
}
