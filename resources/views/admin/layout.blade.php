
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('dashboard/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dashboard/adminlte.min.css')}}">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper ">
  <!-- Navbar -->
  @include('admin.navbar-dashboard')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.sidebar-dashboard')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  {{-- @include('admin.content-dashboard') --}}
  <!-- /.content-wrapper -->

  @include('admin.footer-dashboard')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('dashboard/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dashboard/adminlte.min.js')}}"></script>
<!-- Sweetalert -->
<script src="{{asset('js2/sweetalert.min.js')}}"></script>
<!--- dataTables -->
<script src="{{asset('js2/dataTables.bootsrap4.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script>
  $(function () {
      bsCustomFileInput.init();
  });
</script>

@stack('script')
</body>
</html>
