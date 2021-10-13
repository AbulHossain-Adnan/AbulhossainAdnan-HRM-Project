@extends('layouts.Backend.master')
@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">Post create</div>
    <div class="card-body">
        <form action="{{route('post.store')}}" method="post">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">name</label>
              <input type="name" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="name">
             
            </div>
            <label>User id</label>

            <select class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" name="user_id" >

              <option value="">select one</option>
              @foreach ($users as $user): ?>
              <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
            </select>
           
            <div class="form-group">
              <label for="exampleInputPassword1">details</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="details" placeholder="details">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>

@endsection