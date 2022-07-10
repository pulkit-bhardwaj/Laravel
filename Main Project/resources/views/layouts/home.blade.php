<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Piece</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/app.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('partials/nav')
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                @yield('content')
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-primary">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; One Piece </p></div>
        </footer>
        <script src="/js/app.js"></script>
    </body>
</html>
