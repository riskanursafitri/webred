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

<section id="creative" class="creative" style="padding-top: 10%;">
    <div class="container">

        <header class="section-header" data-aos="fade-up">
            <p>Creative Service</p>
        </header>

        <ul class="nav nav-tabs row d-flex">
            <li class="nav-item col-6" data-aos="zoom-in">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                    <i class="ri-star-fill icon"></i>
                    <h4 class="d-none d-lg-block">Logo Design</h4>
                </a>
            </li>
            <li class="nav-item col-6" data-aos="zoom-in" data-aos-delay="100">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                    <i class="ri-star-fill icon"></i>
                    <h4 class="d-none d-lg-block">Social Media Promotion</h4>
                </a>
        </ul>

        <!-- Logo Design -->
        <div class="tab-content" data-aos="fade-up">
            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="col-lg-7 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3 style="text-align: justify;">Bangkitkan Identitas Brand Anda Dengan Logo Yang Memukau!</h3>
                        <p style="text-align: justify;">
                            Apakah Anda ingin menciptakan identitas visual yang kuat dan berkesan untuk bisnis Anda? Logo adalah kunci untuk membangun citra yang menggambarkan uniknya brand Anda.
                            Mari bersama-sama merangkul kesuksesan dengan logo yang tepat dan memikat!
                            Sebuah logo yang bagus dapat meningkatkan kesan positif, membedakan Anda dari pesaing, dan meningkatkan kepercayaan pelanggan.
                        </p>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center">
                        <img src="{{ asset('user/assets/img/features-2.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Instagram Management -->
            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="col-lg-7 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Instagram Management</h3>
                        <p style="text-align: justify;">
                            Percayakan social media management Anda pada Ahlinya. Hemat waktu, hemat biaya, Anda 100% Fokus Mengurus Bisnis, kami urus social media Anda.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Interaksi meningkat secara organik</li>
                            <li><i class="ri-check-double-line"></i> Fresh konten setiap minggu</li>
                            <li><i class="ri-check-double-line"></i> Bisa request konsep konten</li>
                        </ul>
                        <div class="col-lg-8">
                            <div class="accordion accordion-flush" id="creativelist" data-aos="fade-up" data-aos-delay="100">
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#creative-content-1">
                                            $200
                                        </button>
                                    </h3>
                                    <div id="creative-content-1" class="accordion-collapse collapse" data-bs-parent="#creativelist">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><i class="ri-check-double-line"></i> 12 feeds post</li>
                                                <li><i class="ri-check-double-line"></i> Copywriting in Indonesia</li>
                                                <li><i class="ri-check-double-line"></i> Relevant Hashtag</li>
                                                <li><i class="ri-check-double-line"></i> Post scheduling strategy</li>
                                                <li><i class="ri-check-double-line"></i> Admin posting</li>
                                                <li><i class="ri-check-double-line"></i> Iklan Instagram campaign awareness</li>
                                                <li><i class="ri-check-double-line"></i> Approval timeline per Minggu</li>
                                                <li><i class="ri-check-double-line"></i> Support revisi max 1 kali per minggu</li>
                                                <li><i class="ri-check-double-line"></i> Monthly report</li>
                                                <li><i class="ri-check-double-line"></i> Monthly Strategic Plan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#creative-content-2">
                                            $300
                                        </button>
                                    </h3>
                                    <div id="creative-content-2" class="accordion-collapse collapse" data-bs-parent="#creativelist">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><i class="ri-check-double-line"></i> 20 feeds post</li>
                                                <li><i class="ri-check-double-line"></i> Copywriting in Indonesia</li>
                                                <li><i class="ri-check-double-line"></i> Relevant Hashtag</li>
                                                <li><i class="ri-check-double-line"></i> Post scheduling strategy</li>
                                                <li><i class="ri-check-double-line"></i> Admin posting</li>
                                                <li><i class="ri-check-double-line"></i> Support management event giveaway</li>
                                                <li><i class="ri-check-double-line"></i> Iklan Instagram campaign awareness</li>
                                                <li><i class="ri-check-double-line"></i> Approval timeline per Minggu</li>
                                                <li><i class="ri-check-double-line"></i> Support revisi max 1 kali per minggu</li>
                                                <li><i class="ri-check-double-line"></i> Support respon komentar*</li>
                                                <li><i class="ri-check-double-line"></i> Monthly report</li>
                                                <li><i class="ri-check-double-line"></i> Monthly Strategic Plan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#creative-content-3">
                                            $400
                                        </button>
                                    </h3>
                                    <div id="creative-content-3" class="accordion-collapse collapse" data-bs-parent="#creativelist">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><i class="ri-check-double-line"></i> 30 feeds post</li>
                                                <li><i class="ri-check-double-line"></i> Copywriting in Indonesia</li>
                                                <li><i class="ri-check-double-line"></i> Relevant Hashtag</li>
                                                <li><i class="ri-check-double-line"></i> Post scheduling strategy</li>
                                                <li><i class="ri-check-double-line"></i> Admin posting</li>
                                                <li><i class="ri-check-double-line"></i> Support management event giveaway</li>
                                                <li><i class="ri-check-double-line"></i> Iklan Instagram campaign awareness</li>
                                                <li><i class="ri-check-double-line"></i> Approval timeline per Minggu</li>
                                                <li><i class="ri-check-double-line"></i> Support revisi max 2 kali per minggu</li>
                                                <li><i class="ri-check-double-line"></i> Support respon komentar*</li>
                                                <li><i class="ri-check-double-line"></i> Monthly report</li>
                                                <li><i class="ri-check-double-line"></i> Monthly Strategic Plan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center">
                        <img src="{{ asset('user/assets/img/features-3.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="order" data-aos="fade-up">
            <a href="https://wa.me/6281333153153">Order Product</a>
        </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
@endpush
@endsection