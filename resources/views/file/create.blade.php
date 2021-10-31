@extends('layouts.Backend.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="card border-primary mb-3">
                <div class="card-header text-white bg-primary">Add file+</div>
                <div class="card-body">
                    <div class="row m-auto">
                        <div class="col-sm-10">
                          <div class="card">
                            <div class="card-body">
                                <form action="{{route('file.store')}}" method="post" enctype='multipart/form-data'>
                                    @csrf
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">File_name</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="name">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">File_Title</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="title">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">User_Name</label>
                                      <div class="col-sm-10">
                                      <select class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" name="user_id" >
                        
                                      <option value="">select one</option>
                                      @foreach ($users as $user): ?>
                                      <option value="{{$user->id}}">{{$user->name}}</option>
                                      @endforeach
                                    </select>

                                      </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">file**</label>
                                      <div class="col-sm-10">
                                        <input type="file" class="form-control" id="inputEmail3" name="file">
                                      </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                      <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </div>
                                  </form>
                            </div>
                          </div>
                        </div>
                </div>
                <div class="card-footer bg-transparent border-success"></div>
              </div>
        </div>
      </div>
    </div>


@endsection

