@extends('layouts.Backend/master')
@section('content')
<div class="card  ">
    <div class="card-header ">
        <a class="btn btn-info" href="{{ route('user.index') }}">Back</a>
        <a class="btn btn-danger" href="{{ route('user.index') }}">Back</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                    <div class="card  mb-3">
                        <div class="card-header text-white bg-info">Personal Details</div>
                        <div class="card-body">   
                       
                          <form action="{{route('profile.update',$users->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Photo*</label>
                                    <div class="col-sm-6">
                                        <td>
                                            <img src="{{asset('uploads/profile_photos')}}/{{$users->image}}" alt="" width="200">
                                        </td>
                                      <input type="file" class="form-control" id="inputEmail3" name="image" value="{{$users->image}}">
                                    </div>
                                  </div>
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">name*</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="name" value="{{$users->name}}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">adress*</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="adress" value="{{$users->adress}}">
                                  </div>
                                </div>
                               
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">contact*</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="contact" value="{{$users->contact}}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">user id*</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" name="user_id" value="{{$users->user_id}}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </div> 
                        </div>
                      </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                    <div class="card mb-3">
                        <div class="card-header text-white bg-success ">Company Details</div>
                        <div class="card-body">
                            <form action="{{route('profile.update',$users->id)}}" method="post" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Department*</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="department" value="{{$users->department}}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">position*</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="position" value="{{$users->position}}">
                                  </div>
                                </div>
                             
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Dateof Joining*</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="joiningdate" value="{{$users->joiningdate}}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Exit Date*</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" name="exitdate" value="{{$users->exitedate}}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">salary*</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="salary" value="{{$users->salary}}">
                                  </div>
                                </div>
                               
                              </form>
                        </div>
                      </div>
                </div>
              </div>
              <div class="card  ">
                <div class="card-header text-white bg-success"></div>
           
              </div>
            </div>
            
          </div>
    </div>
  </div>
  <div class="card  ">
    <div class="card-header text-white bg-info">Header</div>
    <div class="card-body">
    
    </div>
  </div>

@endsection