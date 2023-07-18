@extends('layouts.navbar')
@section('content')
@push('styles')
<link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">
@endpush

<section id="advertising" class="advertising" style="padding-top: 10%;">
    <div class="container">

        <header class="section-header" data-aos="fade-up">
            <p>Content Writing</p>
        </header>

        <ul class="nav nav-tabs row d-flex">
            <li class="nav-item col-4" data-aos="zoom-in">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                    <i class="ri-edit-line"></i>
                    <h4 class="d-none d-lg-block">Food Review</h4>
                </a>
            </li>
            <li class="nav-item col-4" data-aos="zoom-in" data-aos-delay="100">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                    <i class="ri-body-scan-line"></i>
                    <h4 class="d-none d-lg-block">Product Review</h4>
                </a>
            </li>
            <li class="nav-item col-4" data-aos="zoom-in" data-aos-delay="300">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                    <i class="ri-store-line"></i>
                    <h4 class="d-none d-lg-block">Unique Article</h4>
                </a>
            </li>
        </ul>

        <!-- tab1 -->
        <div class="tab-content" data-aos="fade-up">
            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Jasa Review Produk Makanan</h3>
                        <p>
                            Kami menyediakan jasa me-review produk makanan, minuman serta tempat usaha Anda. Dengan bekal pengalaman kami, kami memberikan penilaian secara profesional dengan indikator tersendiri. Review akan dibuat dalam bentuk media post instagram hingga video youtube.
                        </p>
                        <i>
                            If you want to hiring professional food review, then you are in the right place and in the right person. Contact us for details!
                        </i>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="{{ asset('user/assets/img/features-2.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- tab2 -->
            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ asset('user/assets/img/features-2.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- tab3 -->
            <div class="tab-pane" id="tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ asset('user/assets/img/features-3.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="order" data-aos="fade-up">
            <a href="https://wa.me/6281333153153" target="_blank">Order Product</a>
        </div>
    </div>

</section>

@push('scripts')
<script src="{{ asset('user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
@endpush
@endsection