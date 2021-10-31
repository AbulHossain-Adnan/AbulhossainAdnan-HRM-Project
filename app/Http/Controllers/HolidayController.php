<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\HolidayController;
use App\Holiday;
class HolidayController extends Controller
{

public function index()
{
$data=Holiday::OrderBy('id','DESC')->get();
return response()->json($data);
}

public function create()
{
return view('holiday.index');
}
public function store(Request $request)
{

$data= new Holiday();
$data->title=$request->input('title');
$data->date=$request->input('date');
$data->day='sunday';

$data->save();
return response()->json(['success'=>'succfully']);
}

public function show($id)
{
//
}

public function edit($id)
{
$data=Holiday::findOrFail($id);
return response()->json($data);
}
public function updated(Request $request)
{
$data_id=$request->id;
$data=Holiday::findOrFail($data_id);
$data->title=$request->input('title');
$data->date=$request->input('date');
$data->day=$request->input('day');

$data->update();
return response()->json(['success'=>'succfully']);
}

public function destroy($id)
{
$data=Holiday::findOrFail($id);
$data->delete();
}
}