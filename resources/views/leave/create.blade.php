@extends('layouts.employee.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="card border-primary mb-3">
                <div class="card-header text-white bg-info">Leave Request</div>
                <div class="card-body">
                    <div class="row m-auto">
                        <div class="col-sm-10">
                          <div class="card">
                            <div class="card-body">
                                <form action="{{route('leave.store')}}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Leave Date**</label>
                                      <div class="col-sm-10">
                                        @error('ldate')
                                        <span class="text-danger">{{ $message }}</span>
                                          
                                      @enderror
                                        <input type="date" class="form-control" id="inputEmail3" name="ldate">
                                      </div>
                                    </div>
                                  
                                        <input type="hidden" class="form-control" id="inputEmail3" name="user_id" value="{{$user->id}}">
                                   
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Leave type**</label>
                                      <div class="col-sm-10">
                                        @error('ltype')
                                        <span class="text-danger">{{ $message }}</span>
                                          
                                      @enderror
                                        <input type="text" class="form-control" id="inputEmail3" name="ltype">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Leave Reasion**</label>
                                      <div class="col-sm-10">
                                        @error('lreasion')
                                        <span class="text-danger">{{ $message }}</span>
                                          
                                      @enderror
                                        <input type="text" class="form-control" id="inputEmail3" name="lreasion">
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
@endsection

