@extends('layouts.navbar')
@section('content')
@push('styles')
<link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">
@endpush

<!-- blog -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up" style="padding-top: 8%;">

        <div class="row">

            <div class="col-lg-8 entries">

                <!-- blog1 -->
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ asset('user/assets/img/blog/blog1.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Bagaimana caranya agar website mudah ditemukan dan ramai pengunjung ?
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-07-15">15 Juli 2023</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            Agar website Anda mudah ditemukan dan mendapatkan banyak pengunjung, Anda perlu menerapkan berbagai strategi SEO (Search Engine Optimization) dan taktik pemasaran digital.
                        </p>
                        <div class="read-more">
                            <a href="{{ URL::to('/detailblog_pengunjung') }}" target="_blank">Read More</a>
                        </div>
                    </div>

                </article>
                <!-- end blog1 -->

                <!-- blog2 -->
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ asset('user/assets/img/blog/blog2.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Apa itu SEO?
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-07-15">15 Juli 2023</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            SEO adalah singkatan dari Search Engine Optimization. Ini merujuk pada serangkaian praktik dan strategi yang digunakan untuk meningkatkan visibilitas dan peringkat sebuah situs web di hasil pencarian mesin telusur seperti Google, Bing, dan Yahoo.
                        </p>
                        <div class="read-more">
                            <a href="{{ URL::to('/detailblog_seo') }}" target="_blank">Read More</a>
                        </div>
                    </div>

                </article>
                <!-- end blog2 -->

                <!-- blog3 -->
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ asset('user/assets/img/blog/blog3.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Macam-macam website
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-07-15">15 Juli 2023</time></a></li>
                    </div>

                    <div class="entry-content">
                        <p>
                        Ada berbagai macam jenis website yang dapat dibedakan berdasarkan tujuan, konten, dan fungsi yang mereka miliki. Berikut adalah beberapa contoh macam-macam website.
                        </p>
                        <div class="read-more">
                            <a href="{{ URL::to('/detailblog_macam_macam') }}" target="_blank">Read More</a>
                        </div>
                    </div>

                </article>
                <!-- end blog3 -->

                <!-- blog4 -->
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ asset('user/assets/img/blog/blog4.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Apa itu domain & web hosting?
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-07-19">19 Juli 2023</time></a></li>
                    </div>

                    <div class="entry-content">
                        <p>
                            Domain dan web hosting adalah dua elemen penting dalam membangun dan mempublikasikan sebuah situs web. Mari kita bahas keduanya secara terpisah.
                        </p>
                        <div class="read-more">
                            <a href="blog-single.html" target="_blank">Read More</a>
                        </div>
                    </div>

                </article>
                <!-- end blog4 -->

                <!-- blog5 -->
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ asset('user/assets/img/blog/blog5.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Masa aktif website
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-07-19">19 Juli 2023</time></a></li>
                    </div>

                    <div class="entry-content">
                        <p>
                            Masa aktif website adalah periode waktu di mana sebuah situs web tersedia dan dapat diakses oleh pengunjung melalui internet.
                        </p>
                        <div class="read-more">
                            <a href="blog-single.html" target="_blank">Read More</a>
                        </div>
                    </div>

                </article>
                <!-- end blog5 -->
            </div>

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

            <!-- <div class="blog-pagination">
                <ul class="justify-content-center">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div> -->
        </div>
    </div>

</section><!-- End Blog Section -->

@push('scripts')
<script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
@endpush
@endsection