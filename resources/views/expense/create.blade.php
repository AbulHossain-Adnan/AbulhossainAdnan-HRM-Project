@extends('layouts.Backend.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="card border-primary mb-3">
                <div class="card-header text-white bg-primary">Add Notice+</div>
                <div class="card-body">
                    <div class="row m-auto">
                        <div class="col-sm-10">
                          <div class="card">
                            <div class="card-body">
                                <form action="{{route('notice.store')}}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Item Name: *</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="title">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Purchase From: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="title">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Date**</label>
                                      <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputEmail3" name="title" placeholder="title">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                         <label for="inputEmail3" class="col-sm-2 col-form-label">Amount price:* </label>
                                                                                        
                                                                                                       
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="title">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Attach file*</label>
                                      <div class="col-sm-8">
                                        <input type="file" class="form-control" id="inputEmail3" name="title" placeholder="title">
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

