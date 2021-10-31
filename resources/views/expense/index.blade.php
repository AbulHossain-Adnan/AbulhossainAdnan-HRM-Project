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
                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#addmodal" style="float: right;" href="">Add New Expense Item+</a>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">file</th>
                          <th scope="col">Item name</th>
                          <th scope="col">Perchase from</th>
                          <th scope="col">date</th>
                          <th scope="col">amount</th>
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
        <h5 class="modal-title" id="exampleModalLabel">Expense</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formdata" action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Item Name: *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="itemnameid" name="item_name" placeholder="Enter Item Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Purchase From: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="purchaseformid" name="purchase_from" placeholder="Enter Purchase From">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date**</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="dateid" name="purchase_date" placeholder="Enter Date ">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Amount price:* </label>
            
            
            <div class="col-sm-10">
              <input type="text" class="form-control" id="amount_priceid" name="amount_price" placeholder="Enter Amount">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Attach file*</label>
            <div class="col-sm-8">
              <input type="file" class="form-control" id="fileid" name="file" placeholder="title">
            </div>
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
        <h5 class="modal-title" id="exampleModalLabel">Expense</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formdata2" action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Item Name: *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="itemnameid1" name="item_name" placeholder="Enter Item Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Purchase From: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="purchaseformid1" name="purchase_from" placeholder="Enter Purchase From">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date**</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="dateid1" name="purchase_date" placeholder="Enter Date ">
              <input type="hidden" id="hiddenid2" name="id">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Amount price:* </label>
            
            
            <div class="col-sm-10">
              <input type="text" class="form-control" id="amount_priceid1" name="amount_price" placeholder="Enter Amount">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Attach file*</label>
            <div class="col-sm-8">
              <input type="file" class="form-control" id="fileid1" name="file" placeholder="title">
            </div>
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
function expensealldata(){
$.ajax({
type:'GET',
datatype:'json',
url:"/expense",
success:function(data){
let rows=""
$.each(data, function(key , value){
rows+=`
<tr>
  <td>${value.id}</td>
  <td><img src="{{asset('perchase_file/${value.file}')}}" width="100"></td>
  <td>${value.item_name}</td>
  <td>${value.purchase_from}</td>
  <td>${value.purchase_date}</td>
  <td>${value.amount_price}</td>
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
expensealldata();
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
url:"/expense",
contentType: false,
processData: false,
success:function(data){
console.log(data)
$('#addmodal').modal('hide')
expensealldata();
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
url:"/expense/"+id+"/edit",
success:function(response){
$('#editmodal').modal('show')
$('#itemnameid1').val(response.item_name)
$('#purchaseformid1').val(response.purchase_from)
$('#dateid1').val(response.purchase_date)
$('#amount_priceid1').val(response.amount_price)
$('#hiddenid2').val(response.id)
$('#fileid1').val(response.file)

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
url:"/expense/updated",
contentType: false,
processData: false,
success:function(response){
expensealldata();
$('#editmodal').modal('hide')
$('#itemnameid1').val('')
$('#purchaseformid1').val('')
$('#dateid1').val('')
$('#amount_priceid1').val('')
$('#hiddenid2').val('')
$('#fileid1').val('')
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
url:"/expense/"+id,
success:function(){
Swal.fire(
'Deleted!',
'Your file has been deleted.',
'success'
).then((result)=>{
expensealldata();
})
}
})
}
})
})
})
</script>
@endsection