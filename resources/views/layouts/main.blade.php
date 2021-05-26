<x-app-layout>
<!--  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>-->

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bubbly - Boootstrap 4 Admin template by Bootstrapious.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Google fonts - Popppins for copy-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
        <!-- orion icons-->
        <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/css/orionicons.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/css/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/img/favicon.png?3">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
    <!-- navbar-->
{{--    <header class="header">--}}
{{--        <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">Academic staff Dashboard</a>--}}
{{--            <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">--}}
{{--                <li class="nav-item">--}}
{{--                    <form id="searchForm" class="ml-auto d-none d-lg-block">--}}
{{--                        <div class="form-group position-relative mb-0">--}}
{{--                            <button type="submit" style="top: -3px; left: 0;" class="position-absolute bg-white border-0 p-0"><i class="o-search-magnify-1 text-gray text-lg"></i></button>--}}
{{--                            <input type="search" placeholder="Search ..." class="form-control form-control-sm border-0 no-shadow pl-4">--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </li>--}}

{{--                <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/img/avatar-6.jpg" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>--}}

{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--    </header>--}}
    <div class="d-flex align-items-stretch">

    <div id="sidebar" class="sidebar py-3">
            <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
            <ul class="sidebar-menu list-unstyled">
                <li class="sidebar-list-item"><a href="{{url('/dashboard')}}" class="sidebar-link text-muted active"><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
                <li class="sidebar-list-item"><a href="{{route('venue.index')}}" class="sidebar-link text-muted"><i class="o-table-content-1 mr-3 text-gray"></i><span>Venues' Details</span></a></li>
                <li class="sidebar-list-item"><a href="forms.html" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>News</span></a></li>

                <li class="sidebar-list-item"><a href="login.html" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Logout</span></a></li>
            </ul>


        </div>



    @yield('content')



    </div>

    <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-center text-md-left text-primary">
                    <p class="mb-2 mb-md-0">Udom Venue Booking system &copy; 2021</p>
                </div>
                <div class="col-md-6 text-center text-md-right text-gray-400">
                    <p class="mb-0">Maintained by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">University of Dodoma</a></p>
                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
            </div>
        </div>
    </footer>


    <!-- JavaScript files-->
    <script src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/vendor/jquery/jquery.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/js/charts-home.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/js/front.js"></script>
    </body>
    </html>
</x-app-layout>
