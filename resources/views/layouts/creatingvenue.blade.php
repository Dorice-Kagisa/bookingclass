<html>

<head>
    <title>Venue Booking System - Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .container{
           background-color: e8e8e8 ;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
             background-color: e8e8e8 ;
            color: black;
            text-align: center;
            font-family: sans-serif;
            font-size: 5px;
            height:10%;
        }

    </style>

</head>

<body>
    @section('sidebar')

    @show

    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">

        <h4 style="font-size: 2.5em; padding-top: 20px">Copyright &copy; 2021 UCBS</h4>
        <h4 style="font-size: 2.5em">Maintained by <em>The university of Dodoma</em></h4>
        

    </div>
</body>

</html>