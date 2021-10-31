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
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Department</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






                  <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Department</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                         <div class="card-header text-white bg-info">Department Name</div>
                        <div class="modal-body">
                            <form id="formdata2" action="" method="post">
                              @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department*</label>
                                    <div class="col-sm-8">
                                      
                                      <input type="text" class="form-control" id="updepartment" name="department">

                                      <input type="hidden" class="form-control" id="heddenid" name="id">
                                    </div>
                                    
                                  </div>
                                  <div class="form-group row">
                              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>



Button trigger modal
<!-- Modal -->
<div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="card-header text-white bg-info">Department Name</div>
      <div class="modal-body">
          <form id="formdata2" action="" method="post">
                              @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department*</label>
                                    <div class="col-sm-8">
                                      
                                      <input type="text" class="form-control" id="updepartment" name="department">

                                      <input type="hidden" class="form-control" id="heddenid" name="id">
                                    </div>
                                    
                                  </div>
                                  <div class="form-group row">
                              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>