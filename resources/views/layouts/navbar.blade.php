<!DOCTYPE html>
<html lang="en">


<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('user/assets/img/logored.png') }}" type="image/x-icon">
    <title>RedLevl Mediatama</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <!-- <link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <!-- <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet"> -->
    @stack('styles')
</head>

<body>

    <!-- header -->
    <header id="header" class="header fixed-top" style="background-color: #1f1f1f;">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a class="logo d-flex align-items-center">
                <!-- <img src="{{ asset('user/assets/img/logored.png') }}"> -->
                <b><span style="color : red;">RED</span><span style="color : #f1a208;">LEVL</span></b>

            </a>

            <!-- navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ URL::to('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ URL::to('/about') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ URL::to('/blog') }}">Blog</a></li>
                    <li><a class="nav-link scrollto" href="{{ URL::to('/gallery') }}">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="{{ URL::to('/internship') }}">Internship</a></li>
                    <li class="dropdown"><a href="{{ URL::to('/detailservice') }}"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ URL::to('/advertising') }}">Advertising</a></li>
                            <li><a href="{{ URL::to('/contentwriting') }}">Content Writing</a></li>
                            <li><a href="{{ URL::to('/creativeservice') }}">Creative Service</a></li>
                            <!-- <li><a href="#">IT Consultant</a></li> -->
                            <li><a href="{{ URL::to('/seoservice') }}">SEO Service</a></li>
                            <li><a href="{{ URL::to('/webdevelopment') }}">Web Development</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- end navbar -->

        </div>
    </header>
    <!-- end header -->
    @yield('content')
    @include('sweetalert::alert')

    <!-- footer -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-9 col-md-12 footer-info" style="padding-right: 10%;">
                        <a class="logo d-flex align-items-center">
                            <b><span style="color : red;">RED</span><span style="color : #f1a208;">LEVL</span></b>
                        </a>
                        <p>A leading innovative digital media service in helping the community, especially business people.</p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/RedLevl/" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/redlevl/" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://wa.me/6281333153153" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                            <a href="mailto:redlevlmediatama@gmail.com" class="gmail"><i class="bi bi-envelope"></i></a>
                            <a href="https://www.google.com/maps/@-7.9345153,112.6721868,21z?entry=ttu" class="location"><i class="bi bi-geo-alt"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Jl. Dipomanggolo V No 280<br>
                            +6281-333-153-153<br>
                            redlevlmediatama@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright"> &copy;
                <!-- <b><span style="color : red;">RED</span><span style="color : #f1a208;">LEVL</span></b>
                <b><span style="color : white;">MEDIATAMA</span></b> -->
                <span>REDLEVL MEDIATAMA</span>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <!-- <script src="{{ asset('user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script> -->

    <!-- Template Main JS File -->
    <!-- <script src="{{ asset('user/assets/js/main.js') }}"></script> -->

    @stack('scripts')
</body>

</html>