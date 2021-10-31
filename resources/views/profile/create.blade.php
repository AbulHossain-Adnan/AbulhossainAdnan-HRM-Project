@extends('layouts.Backend.master')
@section('content')
<div class="row mb-50px">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <div class="card">
          <div class="card-header bg-info text-white">Create Profile</div>
          <div class="card-body">
        
              <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                  <div class="form-group">
                  
                    <label for="exampleInputEmail1">name</label>
                    @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                    <input type="name" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="name">
                   
                  </div>
                 
                  <label>User Name</label>
                  @error('user_id')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <select class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" name="user_id" >
      
                    <option value="">select one</option>
                    @foreach ($users as $user): ?>
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                  </select>
                
                  <label>department</label>
                  @error('department')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <select class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" name="department" >
      
                    <option value="">select one</option>
                    @foreach ($departments as $department): ?>
                    <option value="{{$department->department}}">{{$department->department}}</option>
                    @endforeach
                  </select>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Joining date</label>
                    @error('joiningdate')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="date" class="form-control" id="exampleInputPassword1" name="joiningdate" placeholder="adress">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">exite date</label>
                    @error('exitedate')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="date" class="form-control" id="exampleInputPassword1" name="exitedate" placeholder="adress">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">adress</label>
                    @error('adress')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="text" class="form-control" id="exampleInputPassword1" name="adress" placeholder="adress">
                  </div>
                 
               
                  <div class="form-group">
                    <label for="exampleInputPassword1">salary</label>
                    @error('salary')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="text" class="form-control" id="exampleInputPassword1" name="salary" placeholder="salary">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">position</label>
                    @error('position')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="text" class="form-control" id="exampleInputPassword1" name="position" placeholder="exmpl:Senior/Junior/mid-level">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputPassword1">contact number</label>
                    @error('contact')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="text" class="form-control" id="exampleInputPassword1" name="contact" placeholder="contact">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Profile Image</label>
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-info" href="{{ route('user.index') }}">Back</a>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection