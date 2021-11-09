<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Http\Controllers\PostController;

class PostController extends Controller
{
   
    public function index()
    {
        return view('post.index',[
            'posts'=>Post::all()
        ]);
    }


    public function create()
    {
        return view('post.create',[
            'users'=>User::all()
        ]);
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'user_id'=>'required',
            'details'=>'required',
        ]);
        Post::insert([
            'name'=>$request->name,
            'user_id'=>$request->user_id,
            'details'=>$request->details,
        ]);
        return redirect()->route('post.create');
    }


    public function show($id)
    {
      return view('user.postshow',[
          'posts'=>User::find($id)->posts
      ]);
    }

}
