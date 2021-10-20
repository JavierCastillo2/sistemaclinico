<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  {!! Html::style('adminlte/plugins/fontawesome-free/css/all.min.css') !!}
  <!-- Theme style -->
  @yield('style')
  {!! Html::style('adminlte/dist/css/adminlte.min.css') !!}
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      @include('layouts._user_menu')
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts._nav')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Contáctanos
    </div>
    <!-- Default to the left -->
    <strong>MediFix &copy;
      <script type="text/javascript">
        document.write(new Date().getFullYear());
      </script>
      <a href="#">Sistema Clinico</a>.</strong> Todos los derechos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
{!! Html::script('adminlte/plugins/jquery/jquery.min.js') !!}
<!-- Bootstrap 4 -->
{!! Html::script('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
@yield('script')
<!-- AdminLTE App -->
{!! Html::script('adminlte/dist/js/adminlte.min.js') !!}
</body>
</html>
