<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>index page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        rel="stylesheet"
        type="text/css"
        media="screen"
        href='css/@yield('style').css'
    />

    <link rel="stylesheet" href="/css/style.css" />
    <!-- font awesome -->
    <script
        src="https://kit.fontawesome.com/246461d77d.js"
        crossorigin="anonymous"
    ></script>
    <!-- bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

{{--    <!-- Popper JS -->--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    @yield('head')
</head>
<body>
<div class="container-fluid">
    <!-- start header -->
        @include('layouts.header')
    <!-- end header -->
    @yield('content')
    <!-- start footer -->
        @include('layouts.footer')
    <!-- end footer -->

    <!-- <div class="d-flex flex-colum mt-3 logo-size" style="position: fixed; bottom: 10px; z-index: 2;">
      <a href="https://www.instagram.com/bsr_web/" class="zoom mr-1 mb-1"><img src="img/instagram-icon.png" class="my-auto" alt="instagram-icon" width="20px"></a>

      <p class="text-light" style="text-shadow: 1px 1px 2px black;"><small>Written By <a href="https://www.instagram.com/bsr_web" class="text-light" style="text-decoration: none;"><b>Bsr_Web</b></a></small></p>
    </div> -->

</div>
<!-- end container -->
</body>
</html>
