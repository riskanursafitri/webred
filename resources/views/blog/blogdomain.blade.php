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
                        <img src="{{ asset('user/assets/img/blog/blog3.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Apa itu domain & web hosting?
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-07-19">19 Juli 2023</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p style="text-align: justify;">
                            Domain dan web hosting adalah dua elemen penting dalam membangun dan mempublikasikan sebuah situs web. Mari kita bahas keduanya secara terpisah:
                        </p>
                        <h3>Domain</h3>
                        <p style="text-align: justify;">
                            Domain adalah alamat unik yang digunakan untuk mengidentifikasi suatu situs web di internet. Ini adalah nama yang dimasukkan pengguna di bilah alamat browser untuk mengakses situs web tertentu. Misalnya, "www.contoh.com" adalah contoh dari sebuah domain. Domain digunakan untuk memberikan identitas dan lokasi yang mudah diingat bagi situs web.
                        </p>
                        <p style="text-align: justify;">
                            Domain terdiri dari dua bagian utama: nama domain dan ekstensi domain. Nama domain merupakan bagian yang unik dan bisa dipilih oleh pemilik situs web, sedangkan ekstensi domain menunjukkan jenis atau kategori situs web tersebut. Beberapa ekstensi domain yang umum digunakan adalah ".com" (komersial), ".org" (organisasi), ".net" (jaringan), ".edu" (pendidikan), ".gov" (pemerintahan), dan masih banyak lagi.
                        </p>
                        <i style="text-align: justify;">
                            Penting untuk mencatat bahwa domain harus dibeli dan dikelola secara teratur melalui registrar domain yang terpercaya. Biaya domain dapat bervariasi tergantung pada nama domain dan ekstensi yang dipilih.
                        </i>


                        <h3>Web Hosting</h3>
                        <p style="text-align: justify;">
                            Web hosting adalah layanan yang menyediakan ruang atau tempat untuk menyimpan data, file, dan konten dari suatu situs web di server yang terhubung dengan internet. Ketika seseorang mengakses domain situs web, server web hosting akan merespons permintaan tersebut dan menampilkan konten situs web ke pengguna.
                        </p>
                        <p style="text-align: justify;">
                            Pemilihan layanan web hosting sangat penting karena akan mempengaruhi kinerja, kecepatan, dan ketersediaan situs web Anda. Beberapa jenis hosting yang umum digunakan adalah shared hosting (berbagi server dengan banyak situs web lain), VPS hosting (server virtual yang lebih eksklusif), dedicated hosting (server fisik yang sepenuhnya digunakan untuk satu situs web), dan cloud hosting (hosting di beberapa server yang terhubung dalam jaringan).
                        </p>
                        <p style="text-align: justify;">
                            Biaya dan fitur hosting berbeda-beda tergantung pada penyedia layanan hosting dan paket yang Anda pilih. Penting untuk memilih penyedia web hosting yang dapat memenuhi kebutuhan situs web Anda dalam hal kecepatan, dukungan teknis, keamanan, dan ruang penyimpanan yang memadai.
                        </p>
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
                            <img src="{{ asset('user/assets/img/blog/blog2.jpg') }}" alt="">
                            <h4><a href="{{ URL::to('/detailblog_seo') }}">Apa itu SEO (Search Engine Optimization)?</a></h4>
                            <time datetime="2023-07-19">19 Juli 2023</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('user/assets/img/blog/blog4.jpg') }}" alt="">
                            <h4><a href="{{ URL::to('/detailblog_masa_aktif') }}">Apa itu domain & web hosting?</a></h4>
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