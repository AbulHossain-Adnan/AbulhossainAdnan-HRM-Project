
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('Backend/File')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('Backend/File')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('Backend/File')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('Backend/File')}}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('Backend/File')}}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('Backend/File')}}/js/demo/chart-area-demo.js"></script>
    <script src="{{asset('Backend/File')}}/js/demo/chart-pie-demo.js"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
  <script src="sweetalert2.min.js"></script>












































<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="card-header text-white bg-info">Department Name</div>
      <div class="modal-body">
          <form id="formdata" action="" method="post">
                              @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department*</label>
                                    <div class="col-sm-8">
                                      
                                      <input type="text" class="form-control" id="departmentid" name="department">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>






</body>

</html>