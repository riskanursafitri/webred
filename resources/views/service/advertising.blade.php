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
            <p>Advertising</p><br>
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
                        <h3>Maksimalkan Potensi Bisnis Anda Bersama Layanan Advertising Kami!</h3>
                        <p style="text-align: justify;">
                        Apakah Anda ingin memperluas jangkauan bisnis Anda? Mencapai lebih banyak pelanggan? Membangun citra brand yang kuat? Jika ya, maka Anda berada di tempat yang tepat! Selamat datang di tim layanan advertising kami, di mana kreativitas, inovasi, dan strategi yang tepat bertemu untuk memberdayakan bisnis Anda! Menerima pembuatan advertising seperti:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Baliho</li>
                            <li><i class="ri-check-double-line"></i> Banner</li>
                            <li><i class="ri-check-double-line"></i> Cover Board</li>
                            <li><i class="ri-check-double-line"></i> Name Board</li>
                            <li><i class="ri-check-double-line"></i> Reklame</li>
                            <li><i class="ri-check-double-line"></i> Spanduk</li>
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
                <a href="https://wa.me/6281333153153" target="_blank">Order Product</a>
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