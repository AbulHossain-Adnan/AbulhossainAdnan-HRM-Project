@extends('layouts.employee.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="card border-primary mb-3">
          <div class="card-header text-white bg-info">Leave Request+</div>
          <div class="card-body">
            <div class="row m-auto">
              <div class="col-sm-10">
                <div class="card">
                  <div class="card-body">
                    <form action="{{route('leave.store')}}" method="post">
                      @csrf
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Start leave*</label>
                        <div class="col-sm-10">
                          @error('startdate')
                          <span class="text-danger">{{ $message }}</span>
                          
                          @enderror
                          <input type="date" class="form-control" id="inputEmail3" name="startdate">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">End leave*</label>
                        <div class="col-sm-10">
                          @error('ldate')
                          <span class="text-danger">{{ $message }}</span>
                          
                          @enderror
                          <input type="date" class="form-control" id="inputEmail3" name="enddate">
                        </div>
                      </div>
                      
                      <input type="hidden" class="form-control" id="inputEmail3" name="user_id" value="{{$user->id}}">
                      
                      <div class="form-group row">
                         <label for="inputEmail3" class="col-sm-2 col-form-label">leave type*</label>
                      <span class="text-danger" id="id_error"></span>
                      <div class="col-sm-8">
                        <select class="form-control select2" data-placeholder="Choose country" id="" name="leave_type">
                          <option label="Choose leave type">Choose leave type</option>
                         
                          @foreach($leave_types as $item)
                          <option id="leave_type" value="{{$item->leave_type}}">{{$item->leave_type}}</option>
                         
                         @endforeach
                          
                           @error('leave_type')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </select>

                      </div>
                      <div class="form-group col-md-2">
            <label class="ckbox">
              <input type="checkbox" name="half_day" id="half" value="1">
              <span>Half_Day</span>
            </label>
            </div><!-- col-4 -->
                    </div>
                   
                        
                     
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Leave_Reasion*</label>
                        <div class="col-sm-10">
                          @error('lreasion')
                          <span class="text-danger">{{ $message }}</span>
                          
                          @enderror
                          <input type="text" class="form-control" id="inputEmail3" name="lreasion" placeholder="leave reason">
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
            <div class="card-footer bg-transparent border-success">Footer</div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @endsection
         <script>
    @if(Session::has('message'))
                var type="{{Session::get('alert-type','success')}}"
                switch(type){
                    case 'info':
                         toastr.info("{{ Session::get('message') }}");
                         break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                    case 'warning':
                       toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
              @endif
  </script>