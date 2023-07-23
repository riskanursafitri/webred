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

<section id="web" class="web" style="padding-top: 10%;">
    <div class="container">

        <header class="section-header" data-aos="fade-up">
            <p>Web Development</p><br>
        </header>

        <!-- <ul class="nav nav-tabs row d-flex"> -->
        <!-- <li class="nav-item col-12" data-aos="zoom-in" data-aos-delay="100">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-1">
                    <i class="ri-body-scan-line"></i>
                    <h4 class="d-none d-lg-block">Product Review</h4>
                </a>
            </li> -->

        <!-- tab2 -->
        <div class="tab-pane" id="tab-1">
            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1 mt-3 mt-lg-0">
                    <h3>Bangun Presensi Online Yang Menakjubkan Bersama Layanan Web Development Kami</h3>
                    <p style="text-align: justify;">
                        Inilah saatnya untuk menghadirkan bisnis Anda ke dunia digital dengan layanan web development kami yang profesional dan inovatif!
                        Situs web adalah wajah bisnis Anda di dunia digital. Ini adalah platform pertama yang dilihat oleh calon pelanggan Anda, dan juga cara utama untuk menyampaikan informasi dan layanan yang Anda tawarkan. 
                        Dengan web development yang tepat, Anda dapat menjangkau audiens yang lebih luas, memperkuat kehadiran online, dan meningkatkan konversi bisnis Anda.
                        Beberapa web yang dapat anda buat seperti:
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Business Web</li>
                        <li><i class="ri-check-double-line"></i> E-commerce</li>
                        <li><i class="ri-check-double-line"></i> Education Web</li>
                        <li><i class="ri-check-double-line"></i> E-paper</li>
                        <li><i class="ri-check-double-line"></i> News Web</li>
                        <li><i class="ri-check-double-line"></i> Non-profit Web</li>
                        <li><i class="ri-check-double-line"></i> Portofolio Web, etc.</li>
                    </ul>
                    <!-- <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p> -->
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center">
                    <img src="{{ asset('user/assets/img/features-2.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="order" data-aos="fade-up">
            <a href="https://wa.me/6281333153153">Order Product</a>
        </div>
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