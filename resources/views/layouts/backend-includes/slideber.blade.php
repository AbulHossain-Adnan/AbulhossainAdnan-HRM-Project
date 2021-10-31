<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{url('admin/dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->


<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Utilities Collapse Menu -->
<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Employee</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
         
            <a class="collapse-item" href="{{ route('user.index') }}">Employee list</a>
          
            <a class="collapse-item" href="{{ route('status.create') }}">status create</a>
          
        </div>
    </div>
</li> -->
<li class="nav-item">
    <a class="nav-link" href="{{route('user.index')}}">
    <i class="fas fa-users"></i>
        <span>Employee</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('department.create')}}">
    <i class="fas fa-building"></i>
        <span>Department</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('expense.create')}}">
    <i class="fas fa-money-bill-alt"></i>
        <span>Expence</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('holiday.create')}}">
    <i class="fas fa-gifts"></i>
        <span>Holiday</span></a>
</li>
<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user"></i>
        <span>Attendence</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
         
            <a class="collapse-item" href="{{route('profile.create')}}">Mark Attendence</a>
            <a class="collapse-item" href="{{route('profile.index')}}">View Attendence</a>
    
           
        </div>
    </div>
</li> -->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="{{route('notice.create')}}">
    <i class="fas fa-money-bill-alt"></i>
        <span>Notice</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="{{route('leave.index')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Leave request</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="{{route('file.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>File management</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">





</ul>