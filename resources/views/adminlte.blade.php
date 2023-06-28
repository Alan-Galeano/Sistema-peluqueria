<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Ingreso</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/adminlte/OverlayScrollbars.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">
        <!-- Header -->
        @include('Modulos.header')
        <!-- Sidebar -->
        @include('Modulos.aside')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper mt-2">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- footer -->
    @include('Modulos.footer')

    <!-- jQuery -->
    <script src="adminlte/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="adminlte/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="adminlte/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="adminlte/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminlte/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="adminlte/pages/dashboard.js"></script>
</body>

</html>
