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
                    <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#addmodal" style="float: right;" href="{{ route('department.create') }}">Add department+</a>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">Department</th>
                          <th scope="col">action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal for add data -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formdata" method="post" action="">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Department Name</label>
            <input type="text" class="form-control" id="departmentid" name="department" aria-describedby="emailHelp" placeholder="Enter department name">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<!-- Modal for edit data -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formdata2" method="post" action="">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Department Name</label>
            <input type="text" class="form-control" id="departmentid2" name="department" aria-describedby="emailHelp">
            <input type="hidden" name="id" id="heddenid">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<script>

function departmentalldata(){
$.ajax({
type:'GET',
datatype:'json',
url:"/department",
success:function(data){
let rows=""
$.each(data, function(key , value){
rows+=`
<tr>
  <td>${value.id}</td>
  <td>${value.department}</td>
  <td>
    <button class="btn btn-primary btn-sm" type="button" data-id=""   id="departmentedit" onclick="editdata(${value.id})">show//edit</button>
    <button type="button" value="${value.id}" class="btn btn-danger btn-sm" id="departmentdelete">delete</button>
    
  </td>
  
  
</tr>
`
})
$('tbody').html(rows)
}
})
}
departmentalldata();
</script>


<!-- script for store data -->
<script>
$(document).ready(function(){
$('body').on('submit','#formdata',function(e){
e.preventDefault();
let formdata = new FormData($('#formdata')[0]);

$.ajax({
type:"POST",
datatype:'json',
data:formdata,
url:"/department",
contentType: false,
processData: false,
success:function(data){
$('#addmodal').modal('hide')
departmentalldata();
$('#departmentid').val('')

const Toast = Swal.mixin({
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('mouseenter', Swal.stopTimer)
toast.addEventListener('mouseleave', Swal.resumeTimer)
}
})
Toast.fire({
icon: 'success',
title: 'Data added succesflly'
})

}
})
})
})
</script>
<!-- script for edit data -->
<script>
function editdata(id){
$.ajax({
type:'GET',
datatype:'json',
url:"/department/"+id+"/edit",
success:function(response){
$('#editmodal').modal('show')
$('#departmentid2').val(response.department)
$('#heddenid').val(response.id)
}
})
}
</script>

<!-- script for update -->
<script>
$(document).ready(function(){
$('body').on('submit','#formdata2', function(e){
e.preventDefault();
let formdata2 = new FormData($('#formdata2')[0]);
id =$('#heddenid').val();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
type:'POST',
data:formdata2,
url:"/department/updated",
contentType: false,
processData: false,
success:function(response){
departmentalldata();
$('#editmodal').modal('hide')
const Toast = Swal.mixin({
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('mouseenter', Swal.stopTimer)
toast.addEventListener('mouseleave', Swal.resumeTimer)
}
})
Toast.fire({
icon: 'success',
title: 'Data update succesflly'
})
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
departmentalldata();
})
}
})

}
})
})
})
</script>
@endsection