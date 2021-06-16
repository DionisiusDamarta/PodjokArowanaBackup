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
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+62 895-0700-7645</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">labitamaudy11@gmail.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">Perumahan Griya Amarta no C7. Joyo Agung, Malang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Toko Ikan Podjok Arowana</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Kategori</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            @foreach($categories as $category)
                            <a class="dropdown-item" href="/category/{{$category->slug}}">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </li>
                    <!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url(https://wallpaperaccess.com/full/2306485.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Toko Ikan Podjok Arowana</h1>
                            <!-- <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p> -->
                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url(https://wallpapercave.com/wp/wp3626564.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">Perumahan Griya Amarta no C7. Joyo Agung, Malang</h1>
                            <h2 class="subheading mb-4">+62 895-0700-7645</h2>
                            <p><a href="#" class="btn btn-primary">View Details</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    @yield('content')

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> Toko Ikan Podjok Arowana
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

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