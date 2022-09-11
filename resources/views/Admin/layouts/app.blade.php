<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>   @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Backend/dist/css/adminlte.min.css')}}">
   
    <link rel="stylesheet" href="{{asset('Backend/dist/css/adminlte.min.css')}}">
     @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('Admin.layouts.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Admin.layouts.sidebar')

        @yield('content')

     @include('Admin.layouts.footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('Backend/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
      <script src="{{asset('Backend/bootstrap.min.js')}}"></script>
      <script src="{{asset('Backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('Backend/dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('Backend/plugins/jquery/jquery.slim.min.js')}}"></script>
    <!-- Bootstrap 4 -->
  
    <!-- AdminLTE App -->
  
    @yield('js')

</body>

</html>

</html>