<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
@include('layouts.includes.style')

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

@include('layouts.includes.header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   @if(Auth::user()->roles->name == 'Admin')
   @include('layouts.includes.admin.sidebar')
    @elseif(Auth::user()->roles->name == 'Guru')
    @include('layouts.includes.guru.sidebar')
     @elseif(Auth::user()->roles->name == 'Siswa')
     @include('layouts.includes.siswa.sidebar')
     @endif
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
   @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @include('layouts.includes.footer')
</div>
<!-- ./wrapper -->

@include('layouts.includes.scripts')
@yield('scripts')
</body>
</html>
