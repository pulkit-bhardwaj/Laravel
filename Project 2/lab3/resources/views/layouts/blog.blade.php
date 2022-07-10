<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/app.css" rel="stylesheet" />
    </head>
    <body>

        

        <!-- Responsive navbar-->
        @include('partials/nav')

        @yield('header')
        
        <!-- Page content-->
        <div class="container">
            <div class="row">
            @include('partials.flash')
                <!-- Blog entries-->
                @yield('content')
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <script src="/js/app.js"></script>
    </body>
</html>
