@include('admin.body.admin_header')
<div class="wrapper">

  <!-- Preloader -->
  @include('admin.body.admin_preloader')

  <!-- Navbar -->
  @include('admin.body.admin_navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('admin.body.admin_sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('admin')
  <!-- /.content-wrapper -->
  @include('admin.body.admin_footer')

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.body.resource_footer')
