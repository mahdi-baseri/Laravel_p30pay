<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>پنل مدیریت | داشبورد دوم</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/css/admin/font-awesome.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/admin/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/256c46e1e9.js" crossorigin="anonymous"></script>

    <!-- template rtl version -->
    <link rel="stylesheet" href="/css/admin/style.css">
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">
    <!-- Navbar -->
        @include('admin.layouts.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')
    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">داشبورد </h1>
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <!-- Default to the left -->
        <strong>CopyLeft &copy; 2021
            <a href="https://github.com/mahdi-baseri">محمدمهدی باصری</a> .</strong>
    </footer><!-- /. Main footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- Bootstrap -->

<!-- OPTIONAL SCRIPTS -->

<!-- PAGE /js/admin/-->
<!-- SparkLine -->
<!-- jVectorMap -->
<!-- SlimScroll 1.3.0 -->
<script src="/js/admin/jquery.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/admin/adminlte.js"></script>

</body>

</html>
