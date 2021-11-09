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
        <h5 class="modal-title" id="exampleModalLabel">Leave Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formdata" method="post">
          @csrf
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Type_of_Leave*</label>
            <div class="col-sm-8 m-auto">
              <input type="text" class="form-control" id="leave_type" name="leave_type" placeholder="Type of Leave">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Leave_Number*</label>
            <div class="col-sm-8 m-auto">
              <input type="text" class="form-control" id="leave_number" name="leave_number" placeholder="Number of Leave">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Save</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- Modal for edit data -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Leave Type</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id="formdata2" method="post">
    @csrf
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Type_of_Leave*</label>
      <div class="col-sm-8 m-auto">
        <input type="text" class="form-control" id="leave_type1" name="leave_type" placeholder="Type of Leave">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Leave_Number*</label>
      <div class="col-sm-8 m-auto">
        <input type="text" class="form-control" id="leave_number1" name="leave_number" placeholder="Number of Leave">
        <input type="hidden"  id="heddenid" name="id">
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary btn-sm">update</button>
    </div>
  </form>
</div>

</div>
</div>
</div>
<script>
function leavetypealldata(){
$.ajax({
type:'GET',
datatype:'json',
url:"/leave_type/create",
success:function(data){
let rows=""
$.each(data, function(key , value){
rows+=`
<tr>
<td>${value.id}</td>
<td>${value.leave_type}</td>
<td>${value.leave_number}</td>
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
leavetypealldata();
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
url:"/leave_type",
contentType: false,
processData: false,
success:function(data){
  leavetypealldata()
$('#addmodal').modal('hide')
$('#leave_type').val('')
$('#leave_number').val('')
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
url:"/leave_type/"+id+"/edit",
success:function(response){
$('#editmodal').modal('show')
$('#leave_type1').val(response.leave_type)
$('#leave_number1').val(response.leave_number)
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
url:"/leave_type/updated",
contentType: false,
processData: false,
success:function(response){
leavetypealldata();
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
url:"/leave_type/"+id,
success:function(){
Swal.fire(
'Deleted!',
'Your file has been deleted.',
'success'
).then((result)=>{
leavetypealldata();
})
}
})
}
})
})
})
</script>
@endsection