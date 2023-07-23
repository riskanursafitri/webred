@extends('layouts.navbar')
@section('content')
@push('styles')
<link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">
@endpush

<!-- navigate back -->
<!-- <section class="navback">
    <div class="container">
        <ol>
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('/blog') }}">Blog</a></li>
            <li>Detail Blog</li>
        </ol>
    </div>
</section> -->
<!-- end navigate back -->

<!-- detail -->
<section id="detailblog" class="blog">
    <div class="container" data-aos="fade-up" style="padding-top: 8%;">

        <div class="row">

            <div class="col-lg-8 entries">

                <article class="entry entry-single">

                    <div class="entry-img">
                        <img src="{{ asset('user/assets/img/blog/blog2.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Apa itu SEO (Search Engine Optimization)?
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-06-29">29 Juni, 2023</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p style="text-align: justify;">
                            SEO adalah singkatan dari Search Engine Optimization, yang dalam bahasa Indonesia berarti Optimalisasi Mesin Pencari. Ini adalah rangkaian strategi dan teknik yang digunakan untuk meningkatkan peringkat dan kualitas lalu lintas organik (non-berbayar) ke situs web atau halaman tertentu di mesin pencari seperti Google, Bing, Yahoo, dan lainnya.
                        </p>

                        <p style="text-align: justify;">
                            Tujuan dari SEO adalah membuat situs web atau halaman muncul di halaman hasil pencarian (SERP) sesuai dengan relevansi kata kunci tertentu. Dengan mengoptimalkan konten dan struktur situs web, menggunakan kata kunci yang relevan, dan meningkatkan otoritas domain, SEO membantu meningkatkan visibilitas dan kemungkinan lalu lintas yang lebih tinggi dari pengguna yang mencari informasi yang terkait dengan topik atau produk yang Anda tawarkan.
                        </p>

                        <h3>Teknik SEO</h3>
                        <ol>
                            <li>Penelitian kata kunci: Menganalisis kata kunci yang relevan dengan bisnis Anda dan mengidentifikasi kata kunci yang banyak dicari oleh target audiens Anda.</li>
                            <li>Optimasi konten: Memastikan konten di situs web Anda relevan, informatif, dan memiliki kata kunci yang sesuai agar mudah dipahami oleh mesin pencari dan pengguna.</li>
                            <li>Optimalisasi teknis: Memperbaiki struktur situs, menggunakan meta tag yang sesuai, mempercepat waktu pemuatan halaman, dan membuat situs mobile-friendly.</li>
                            <li>Backlink building: Membangun tautan balik (backlink) dari situs web berkualitas tinggi ke situs Anda, yang membantu meningkatkan otoritas domain Anda di mata mesin pencari.</li>
                            <li>Pengalaman pengguna: Memastikan situs web Anda mudah dinavigasi, memiliki tampilan yang menarik, dan memberikan pengalaman pengguna yang baik.</li>
                            <li>Analisis dan pemantauan: Melacak kinerja situs web Anda dengan menggunakan alat analisis web dan mengidentifikasi area yang perlu ditingkatkan.</li>
                        </ol>
                    </div>
                </article><!-- End blog entry -->

            </div>
            <!-- End blog entries list -->

            <!-- side bar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- recent post -->
                    <h3 class="sidebar-title">Yang Disarankan</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                            <img src="{{ asset('user/assets/img/blog/blog3.jpg') }}" alt="">
                            <h4><a href="{{ URL::to('/detailblog_macam_macam') }}">Macam-macam website</a></h4>
                            <time datetime="2023-07-19">19 Juli 2023</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('user/assets/img/blog/blog4.jpg') }}" alt="">
                            <h4><a href="{{ URL::to('/detailblog_domain_hosting') }}">Apa itu domain & web hosting?</a></h4>
                            <time datetime="2023-07-19">19 Juli 2023</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('user/assets/img/blog/blog5.jpg') }}" alt="">
                            <h4><a href="{{ URL::to('/detailblog_masa_aktif') }}">Masa aktif website</a></h4>
                            <time datetime="2023-07-19">19 Juli 2023</time>
                        </div>
                    </div>
                    <!-- end recent post -->

                </div>
            </div>
            <!-- end side bar -->

        </div>

    </div>
</section>
<!-- end detail -->

@push('scripts')
<script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
@endpush
@endsection