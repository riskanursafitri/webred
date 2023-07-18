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

<!-- service section -->
<section id="services" class="services" style="padding-top: 10%;">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p>Service Yang Kami Berikan</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box one">
                    <i class="ri-advertisement-fill icon"></i>
                    <h3>Advertising</h3>
                    <p>Maksimalkan potensi bisnis Anda dengan jasa advertising kami! Kami membawa solusi advertising yang efektif untuk memperluas pangsa pasar Anda.</p>
                    <a href="{{ URL::to('/advertising') }}" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box two">
                    <i class="ri-edit-line icon"></i>
                    <h3>Content Writing</h3>
                    <p>Dapatkan konten yang informatif, menginspirasi, dan memikat untuk membangun keterlibatan pengguna yang kuat dan memperluas jangkauan bisnis Anda secara online.</p>
                    <a href="{{ URL::to('/contentwriting') }}" class="read-more" target="_blank"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-box three">
                    <i class="ri-star-fill icon"></i>
                    <h3>Creative Service</h3>
                    <p>Dapatkan konten yang informatif, menginspirasi, dan memikat untuk membangun keterlibatan pengguna yang kuat dan memperluas jangkauan bisnis Anda secara online.</p>
                    <a href="{{ URL::to('/creativeservice') }}" class="read-more" target="_blank"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-box four">
                    <i class="ri-user-fill icon"></i>
                    <h3>IT Consultant</h3>
                    <p>Optimalkan infrastruktur IT Anda dengan jasa konsultan IT kami! Tim konsultan kami yang berpengalaman siap membantu sesuai dengan kebutuhan bisnis Anda.</p>
                    <a href="{{ URL::to('/itconsultant') }}" class="read-more" target="_blank"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-box five">
                    <i class="ri-file-edit-line icon"></i>
                    <h3>SEO Service</h3>
                    <p>Tim ahli SEO kami siap membantu Anda mengoptimalkan peringkat pencarian dan mendapatkan lalu lintas organik yang lebih tinggi ke situs web Anda.</p>
                    <a href="{{ URL::to('/seoservice') }}" class="read-more" target="_blank"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="service-box six">
                    <i class="ri-layout-2-fill icon"></i>
                    <h3>Web Development</h3>
                    <p>Hadirkan kehadiran online yang menarik dengan jasa pembuatan web kami! Tim profesional kami siap membantu Anda merancang dan mengembangkan situs web yang responsif, fungsional, dan menarik secara visual.</p>
                    <a href="{{ URL::to('/webdevelopment') }}" class="read-more" target="_blank"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

        </div>

    </div>

</section>
<!-- service section -->

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