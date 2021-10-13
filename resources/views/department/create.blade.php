@extends('layouts.Backend/master')
@section('content')
<div class="card  ">
    <div class="card-header ">
        <a class="btn btn-info" href="{{ route('user.index') }}">Back</a>
        <a class="btn btn-danger" href="{{ route('user.index') }}">Back</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-10">
              <div class="card">
                <div class="card-body">
                    <div class="card  mb-3">
                        <div class="card-header text-white bg-info">Department Name</div>
                        <div class="card-body">                         
                            <form action="{{ route('department.store') }}" method="post">
                              @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department*</label>
                                    <div class="col-sm-8">
                                      
                                      <input type="text" class="form-control" id="inputEmail3" name="department">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                
                                  
                                    <button   type="submit" class="btn btn-info col-sm-12">Submit</button>
                                  
                                  </div>
                              </form>
                        
                        </div>
                      </div>
                </div>
              </div>
            </div>




      



          </div>
    </div>
  </div>
 

@endsection