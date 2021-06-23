<!DOCTYPE html>
<html lang="en">

<head>
    <title>Toko Ikan Podjok Arowana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/icomoon.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('user/assets/css/style.css') }}">
</head>

<body class="goto-here">
    @include('user.partials.header')

    @include('user.partials.navbar')

    @include('user.partials.jumbotron')

    @yield('content')

    @include('user.partials.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>

    <script src="{{ URL::asset('user/assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/aos.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{ URL::asset('user/assets/js/scrollax.min.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/google-map.js') }}"></script>
    <script src="{{ URL::asset('user/assets/js/main.js') }}"></script>

</body>

</html>