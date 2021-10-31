
    @include('layouts.backend-includes.header')
        <!-- Sidebar -->
     @include('layouts.backend-includes.slideber')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                 @include('layouts.backend-includes.topber')
                 @include('sweetalert::alert')

      @yield('content')


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


@include('layouts.backend-includes.script')