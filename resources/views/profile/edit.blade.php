@extends('layouts.Backend.master')
@section('content')
<div class="card-header text-white bg-secondary">Profile list</div>
<div class="card-body">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                   
                    <form action="{{route('profile.update',$profile->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                          <div class="form-group">
                          
                            <label for="exampleInputEmail1">name</label>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                       
                            <input type="name" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value=" {{$profile->name}}">
                           
                          </div>
                         
                          <label>User id</label>
                          @error('user_id')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                            <select class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" name="user_id" >
                
                                <option value="{{$profile->user->id}}">{{$profile->user->name}}</option>
                                @foreach ($users as $user): ?>
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        
                          <div class="form-group">
                            <label for="exampleInputPassword1">adress</label>
                            @error('adress')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                            <input type="text" class="form-control" id="exampleInputPassword1" name="adress" value=" {{$profile->adress}}">
                          </div>
                       
                          <div class="form-group">
                            <label for="exampleInputPassword1">salary</label>
                            @error('salary')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" class="form-control" id="exampleInputPassword1" name="salary" value=" {{$profile->salary}}">
                          </div>
                         
                          <div class="form-group">
                            <label for="exampleInputPassword1">position</label>
                            @error('position')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" class="form-control" id="exampleInputPassword1" name="position" value=" {{$profile->position}}">
                          </div>
                       
                          <div class="form-group">
                            <label for="exampleInputPassword1">contact number</label>
                            @error('contact')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" class="form-control" id="exampleInputPassword1" name="contact" value=" {{$profile->contact}}">
                          </div>
                        
                          <div class="form-group">
                            <label for="exampleInputPassword1"> Previous Profile Image</label>
                            <td>
                                <img src="{{asset('uploads/profile_photos')}}/{{$profile->image}}" alt="" width="80">
                              </td>
                       
                            <input type="file" class="form-control" id="exampleInputPassword1" name="image" value="{{$profile->image}}">
                          </div>
                         
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a class="btn btn-info" href="{{ route('profile.index') }}">Back</a>
                        </form>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                    <div class="form-group">
                      
                        <td>
                            <img src="{{asset('uploads/profile_photos')}}/{{$profile->image}}" alt="" width="200">
                          </td>
                   
                        <input type="file" class="form-control" id="exampleInputPassword1" name="image" value="{{$profile->image}}">
                      </div>
                 
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
@endsection