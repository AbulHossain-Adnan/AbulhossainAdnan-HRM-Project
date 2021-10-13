@extends('layouts.Backend/master')
@section('content')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header text-white bg-primary">Department List</div>
                <div class="card-body">
            
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-body">
                                <a class="btn btn-success" href="{{ route('department.create') }}">Add department+</a>
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">action</th>
                                       
                                        
                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach ($departments as $department)
                                      <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$department->department}}</td>
                                       
                                        
                                      
                                        <td>
                                       
                                        
                                           <button class="btn btn-primary btn-sm" type="button" data-id="{{$department->id}}"   id="departmentedit">show//edit</button>
                                          
                                        
                                       

                                          <button type="button" value="{{$department->id}}" class="btn btn-danger" id="departmentdelete">delete</button>
                                         
                                        </td>
                        
                        
                                      </tr>
                                      @endforeach
                                      
                                    
                                    </tbody>
                                  </table>
                            </div>
                          </div>
                        </div>
                        </div>
                      
            
            
            
            
            
            
            
                   
                </div>
              </div>
              <!-- <div class="card">
                <div class="card-header text-white bg-info">Footer</div>
                <div class="card-body">
                </div>
                </div> -->
        </div>
      </div>
    </div>
    </div>
   
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-header text-white bg-info">Department Name</div>
                        <div class="card-body"> 
        <form action="{{ url('department/updated') }}" method="post">
                              @csrf
                             
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department*</label>
                                    <div class="col-sm-8">
                                      
                                      <input type="text" class="form-control" id="departmentid" name="department">
                                      <input type="hidden" class="form-control" id="dataid" name="dataid">

                                    </div>
                                  </div>
                                  <div class="form-group row">
                                  </div>
                             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="departmentupdate">Save changes</button>
         </form>
      </div>
    </div>
  </div>
</div>




<script>
  $(document).ready(function(){
    $('body').on('click','#departmentedit', function(){
      let id=$(this).data('id');
    
       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }

});
         $.ajax({
    type:"GET",
    datatype:'json',
    url:"department/"+id+"/edit",
    success:function(data){
$('#departmentid').val(data.department)
$('#exampleModalCenter').modal('show')
$('#dataid').val(data.id)


    }
    
  })
      
    })
  })
</script>




<script>
  $(document).ready(function(){
    $('body').on('click','#departmentdelete',function(){
     let id=$(this).val();
      Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.ajax({
      type:'DELETE',
      url:"/department/"+id,
      success:function(){
          Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    ).then((result)=>{
      location.reload()
      })
    }

    })



  
  }
})
    })
  })
</script>






@endsection


