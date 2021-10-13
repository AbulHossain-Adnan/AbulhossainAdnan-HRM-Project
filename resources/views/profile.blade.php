@extends('layouts.Backend.master')
@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">Profile</div>
    <div class="card-body">
        <form action="{{route('profile.store')}}" method="post">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">name</label>
              <input type="name" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{$user->name}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{$user->email}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">adress</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="adress" value="{{$user->profilee->adress}}">
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