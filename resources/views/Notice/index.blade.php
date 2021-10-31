@extends('layouts.Backend/master')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="card">
          <div class="card-header text-white bg-primary">Notice List</div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#addmodal" style="float: right;" href="">Add New Notice+</a>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">title</th>
                          <th scope="col">description</th>
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
        <h5 class="modal-title" id="exampleModalLabel">Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formdata" action="" method="post">
          @csrf
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Title**</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="titleid" name="title" >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">description**</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="description" name="description">
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
<!-- Modal for edit data -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formdata2" action="" method="post">
          @csrf
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Title**</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="titleid2" name="title" placeholder="title">
              <input7type="" name="">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">description**</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="description1" name="description" placeholder="title">
              <input type="hidden" id="heddenid2" name="id">
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
<!-- script for all data -->
<script>
function noticealldata(){
$.ajax({
type:'GET',
datatype:'json',
url:"/notice",
success:function(data){
let rows=""
$.each(data, function(key , value){
console.log(value)
rows+=`
<tr>
  <td>${value.id}</td>
  <td>${value.title}</td>
  <td>${value.description}</td>
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
noticealldata();
</script>
<!-- script for store data -->
<script>
$(document).ready(function(){
$('body').on('submit','#formdata',function(e){
e.preventDefault();
let formdata = new FormData($('#formdata')[0]);
$.ajax({
type:'POST',
datatype:'json',
data:formdata,
url:"/notice",
contentType: false,
processData: false,
success:function(data){
noticealldata()
$('#addmodal').modal('hide')
$('#titleid').val('')
$('#textarea').val('')
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
url:"/notice/"+id+"/edit",
success:function(response){
$('#editmodal').modal('show')
$('#titleid2').val(response.title)
$("#description1").val(response.description);
$('#dayid2').val(response.day)
$('#heddenid2').val(response.id)
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
id =$('#heddenid2').val();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
type:'POST',
data:formdata2,
url:"/notice/updated",
contentType: false,
processData: false,
success:function(response){
noticealldata();
$('#editmodal').modal('hide')
$('#titleid2').val('')
$('#description1').val('')
$('#hiddenid2').val('')
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

<!-- script for delete -->
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
url:"/notice/"+id,
success:function(){
Swal.fire(
'Deleted!',
'Your file has been deleted.',
'success'
).then((result)=>{
noticealldata();
})
}
})
}
})
})
})
</script>
<script src="https://cdn.tiny.cloud/1/mvf1q7ov19raltn0vg0b9234dqhfkpxn4zbtz97jao8v0ulc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
{{-- <script>
tinymce.init({
selector:'#textarea'
});
</script> --}}
{{-- get worning show problem solution from stact overflow --}}
<script>
tinymce.init({
selector: 'textarea',

init_instance_callback : function(editor) {
var freeTiny = document.querySelector('.tox .tox-notification--in');
forced_root_block : false,
freeTiny.style.display = 'none';

}
});
</script>
@endsection