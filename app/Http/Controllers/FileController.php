<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\FileController;
use App\File;
use App\User;
use Auth;
use Carbon\Carbon;
class FileController extends Controller
{

public function index()
{
return view('file.index',[
'files'=>File::OrderBy('id','desc')->get()
]);
}

public function create()
{
return view('file.create',[
'users'=>User::where('role_id',2)->get()
]);
}
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
'sender_name'=>Auth::user()->name,
'created_at'=>Carbon::now(),

]);
$uploaded_photo=$request->file('file');
$new_photo_name=$profile_id.'.'.$uploaded_photo->getClientOriginalExtension();
$request->file->move('storege/',$new_photo_name);

File::find($profile_id)->update([
'file'=>$new_photo_name
]);
toast('File  send  Successfully','success');
return redirect()->route('file.index');


}

public function destroy($id)
{
$data=File::findOrFail($id);
unlink('storege/'.$data->file);
$data->delete();
toast('File  delete  Successfully','success');
return back();
}
}