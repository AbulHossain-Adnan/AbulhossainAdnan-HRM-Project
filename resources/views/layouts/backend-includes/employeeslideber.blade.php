<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Employee</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('employee/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
  

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Leave</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
             
           
                <a class="collapse-item" href="{{route('leave.create')}}">Leave Create</a>
                <a class="collapse-item" href="{{route('leave.index')}}">Leave list</a>
        
               
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item ">
       
          <a class="nav-link" href="{{route('employeefile.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>File management</span></a>
    </li>


    


    <!-- Nav Item - Tables -->
  <li class="nav-item ">
        <a class="nav-link" href="{{url('/attendence')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Attendense</span></a>
    </li> 

 

    <!-- Sidebar Message -->
   

</ul>