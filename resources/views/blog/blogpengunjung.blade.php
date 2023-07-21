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
                        <img src="{{ asset('user/assets/img/blog/blog1.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Bagaimana caranya agar website mudah ditemukan dan ramai pengunjung ?
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-06-29">29 Juni, 2023</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p style="text-align: justify;">
                            Agar website Anda mudah ditemukan dan mendapatkan banyak pengunjung, Anda perlu menerapkan berbagai strategi 
                            <u><a href="{{ URL::to('/detailblog_seo') }}" target="_blank">SEO (Search Engine Optimization)</a></u>
                             dan taktik pemasaran digital. Berikut adalah beberapa cara untuk meningkatkan visibilitas dan lalu lintas pengunjung ke situs web Anda:
                        </p>
                        <ol style="text-align: justify;">
                            <li>Penelitian Kata Kunci: Lakukan penelitian kata kunci untuk menemukan kata kunci yang relevan dan banyak dicari oleh target audiens Anda. Gunakan kata kunci ini dalam konten situs web Anda untuk meningkatkan peringkat di hasil mesin pencari.</li>
                            <li>Konten Berkualitas: Buatlah konten yang informatif, berguna, dan relevan bagi target audiens Anda. Konten berkualitas cenderung mendapatkan lebih banyak perhatian dan backlink dari situs lain, yang dapat meningkatkan otoritas situs Anda di mata mesin pencari.</li>
                            <li>Optimasi On-Page: Pastikan setiap halaman di situs web Anda dioptimasi dengan baik. Ini termasuk mengoptimasi tag judul, meta deskripsi, URL, dan penggunaan kata kunci dalam konten.</li>
                            <li>Backlink Building: Bangun tautan balik (backlink) dari situs web berkualitas tinggi dan otoritatif ke situs Anda. Backlink dapat membantu meningkatkan otoritas domain dan peringkat di mesin pencari.</li>
                            <li>Responsif dan Mobile-Friendly: Pastikan situs web Anda dioptimasi untuk tampilan di perangkat seluler, karena banyak pengguna internet mengakses situs web melalui smartphone dan tablet.</li>
                            <li>Kecepatan Halaman: Pastikan situs web Anda memiliki waktu pemuatan yang cepat. Pengguna cenderung meninggalkan situs web yang lambat dan ini dapat mempengaruhi peringkat di mesin pencari.</li>
                            <li>Aktif di Media Sosial: Gunakan media sosial untuk mempromosikan konten Anda dan berinteraksi dengan audiens Anda. Media sosial dapat membantu memperluas jangkauan konten Anda dan mengarahkan lebih banyak pengunjung ke situs web Anda.</li>
                            <li>Blogging: Buat blog dan secara konsisten publikasikan konten bermanfaat dan relevan. Blogging dapat membantu meningkatkan visibilitas dan otoritas situs Anda.</li>
                            <li>Gunakan PPC (Pay-Per-Click) Advertising: Pertimbangkan menggunakan iklan berbayar seperti Google Ads untuk mendapatkan lalu lintas cepat dan mengarahkan pengunjung potensial ke situs web Anda.</li>
                            <li>Analisis dan Pemantauan: Gunakan alat analisis web untuk melacak kinerja situs web Anda, memahami perilaku pengunjung, dan mengidentifikasi area perbaikan.</li>
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
                            <h4><a href="blog-single.html">Macam-macam website</a></h4>
                            <time datetime="2023-07-15">15 Juli 2023</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('user/assets/img/blog/blog4.jpg') }}" alt="">
                            <h4><a href="blog-single.html">Apa itu domain & web hosting?</a></h4>
                            <time datetime="2023-07-19">19 Juli 2023</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('user/assets/img/blog/blog5.jpg') }}" alt="">
                            <h4><a href=" blog-single.html">Masa aktif website</a></h4>
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