<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Employee</title>
    <!-- Custom fonts for this template -->
    <link href="{{asset('Backend/File')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="{{asset('Backend/File')}}/css/sb-admin-2.min.css" rel="stylesheet">
      <!-- Custom styles for this page -->
      <link href="{{asset('Backend/File')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>
    <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.backend-includes.slideber')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          <!-- Main Content -->
          <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
              </button>
              
              <!-- Topbar Search -->
              <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                  aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
              
              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">
                
                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
                
                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                  </a>
                  <!-- Dropdown - Alerts -->
                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                    Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-primary">
                          <i class="fas fa-file-alt text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-success">
                          <i class="fas fa-donate text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-warning">
                          <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                      </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                  </div>
                </li>
                
                <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                  <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">7</span>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                    Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                        alt="">
                        <div class="status-indicator bg-success"></div>
                      </div>
                      <div class="font-weight-bold">
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                        problem I've been having.</div>
                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                        alt="">
                        <div class="status-indicator"></div>
                      </div>
                      <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how
                        would you like them sent to you?</div>
                        <div class="small text-gray-500">Jae Chun · 1d</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                        alt="">
                        <div class="status-indicator bg-warning"></div>
                      </div>
                      <div>
                        <div class="text-truncate">Last month's report looks great, I am very happy with
                        the progress so far, keep up the good work!</div>
                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                        alt="">
                        <div class="status-indicator bg-success"></div>
                      </div>
                      <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                        told me that people say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                      </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                  </div>
                </li>
                
                <div class="topbar-divider d-none d-sm-block"></div>
                
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                      @if(Auth::check())
                      {{Auth::user()->name}}
                      @endif
                    </span>
                    <img class="img-profile rounded-circle"
                    src="{{asset('Backend/File')}}/img/undraw_profile.svg">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                    </a>
                    {{-- <a class="dropdown-item" href="#">
                      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                      Activity Log
                    </a>
                    --}}
                    
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      {{ __('Logout') }}
                      
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
                </li>
                
              </ul>
              
              
              
              
              {{--
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a> --}}
              
              
            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">
              <!-- Page Heading -->
              <h1 class="h3 mb-2 text-gray-800">
              <a href="#"></a>
              </h1>
              
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  
                </div>
                <div class="card-body">
                  <div class="card-header bg-primary text-white">Leave Applycation</div>
                  <div class="table-responsive">
                    
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">Uder id</th>
                          <th scope="col">start date</th>
                          <th scope="col">end date</th>
                          <th scope="col">leave type</th>
                          <th scope="col">reasion</th>
                          <th scope="col">Apply date</th>
                          <th scope="col">status</th>
                          <th scope="col">action</th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach ($leaves as $leave)
                        <tr>
                          <td>{{$loop->index+1}}</td>
                          <td>{{$leave->user_id}}</td>
                          <td>
                            {{$leave->startdate}}
                          </td>
                           <td>
                            {{$leave->enddate}}
                          </td>
                          <td>{{$leave->leavetype}}</td>
                          <td>{{$leave->leavereason}}</td>
                          <td>{{$leave->created_at->format('d/m/Y')}}</td>
                          <td>
                            
                            @if($leave->status==1)
                            
                            <span class="badge badge-success">approved</span>
                            @elseif($leave->status==3)
                            <span class="badge badge-danger">cancel</span>
                            @else
                            <span class="badge badge-warning">pending</span>
                            
                            @endif
                          </td>
                          
                          
                          <td>
                            @if($leave->status==1)
                            <a class="btn btn-warning btn-sm" href="{{url('leavestatus/active',$leave->id)}}">Cancel</a><br>
                            @else
                            <a class="btn btn-success btn-sm" href="{{url('leavestatus/inactive',$leave->id)}}">makeapprove</a><br>
                            @endif
                            
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="{{$leave->id}}" id="viewdata" href="">view</a>
                            <form id="delete-form.{{$leave->id}}" action="{{route('leave.destroy',$leave->id)}}" method="POST" style="display:none;">
                              @csrf
                              @method('DELETE')
                            </form>
                            
                            <button type="button" class="btn btn-danger btn-sm"onclick="if(confirm('are you sure?you want to delete this file?')){
                            event.preventDefault();
                            document.getElementById('delete-form.{{$leave->id}}').submit();
                            }else{
                            event.preventdefault();
                            }"><i class="fa fa-trash"></i>delete</button>
                            
                            
                            
                          </td>
                          
                          
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- /.container-fluid -->
          </div>
          <!-- End of Main Content -->
          <!-- Footer -->
          <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('Backend/File')}}/vendor/jquery/jquery.min.js"></script>
      <script src="{{asset('Backend/File')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="{{asset('Backend/File')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{asset('Backend/File')}}/js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
      <script src="{{asset('Backend/File')}}/vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="{{asset('Backend/File')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="{{asset('Backend/File')}}/js/demo/datatables-demo.js"></script>
      @include('sweetalert::alert')
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" >
      Launch demo modal
      </button>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Name*</label>
    <div class="col-sm-8 m-auto">
      <input type="text" readonly class="form-control" id="namee" >
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email*</label>
    <div class="col-sm-8 m-auto">
      <input type="text" readonly class="form-control" id="email" >
    </div>
  </div>
    <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id*</label>
    <div class="col-sm-8 m-auto">
      <input type="text" readonly class="form-control" id="user_id" >
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Type*</label>
    <div class="col-sm-8 m-auto">
      <input type="text" readonly class="form-control" id="leave_type" >
    </div>
  </div>
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Reason*</label>
    <div class="col-sm-8 m-auto">
      <input type="text" readonly class="form-control" id="leave_reason" >
    </div>
  </div>
     <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">day*</label>
    <div class="col-sm-8 m-auto">
      <input type="text" readonly class="form-control" id="half" >
    </div>
  </div>


  
</form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('body').on('click','#viewdata',function(){
    let id=$(this).data('id');
    $.ajax({
    type:'GET',
    datatype:'json',
    url:"/leave/"+id+"/edit",
    success:function(response){
    console.log(response.user.name)
    $('#namee').val(response.user.name)
    $('#user_id').val(response.user_id)
    $('#email').val(response.user.email)
    $('#leave_type').val(response.leavetype)
    $('#leave_reason').val(response.leavereason)
    (response.half_day ==1 
      ?$('#half').val('Half_Day')
      :$('#half').val('Full_Day')
      )
   


    }
    })
    
    })
    })
    </script>
  </html>