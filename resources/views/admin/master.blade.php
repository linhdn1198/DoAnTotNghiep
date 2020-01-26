<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="/client/img/favicon.png">

    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- DataTables buttons -->
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.css">
    <!-- Summer note -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="/plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('style')
</head>

<body class="hold-transition sidebar-mini">
    <div id="app" class="wrapper">
        <!-- Navbar -->
        @include('admin.modules.navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('admin.modules.main-sidebar')
        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        @include('admin.modules.footer')
    </div>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- DataTables button -->
    <script src="/plugins/datatables-buttons/js/dataTables.buttons.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.flash.js"></script>
    <!-- Summernote -->
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Toastr -->
    <link rel="stylesheet" href="/plugins/toastr/toastr.min.js">
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}")
        @endif

		@if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif

        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}")
        @endif
    </script>
    @yield('script')
</body>
</html>
