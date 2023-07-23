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
                        <img src="{{ asset('user/assets/img/blog/blog5.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Masa aktif website
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-07-19">19 Juli 2023</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p style="text-align: justify;">
                            Masa aktif website adalah periode waktu di mana sebuah situs web tersedia dan dapat diakses oleh pengunjung melalui internet. Masa aktif ini ditentukan oleh berbagai faktor, termasuk pembelian domain dan berlangganan layanan web hosting.
                        </p>
                        <h3>Masa Aktif Domain</h3>
                        <p style="text-align: justify;">
                            Masa aktif domain biasanya ditentukan oleh lamanya registrasi domain yang Anda beli. Ketika Anda membeli sebuah domain, Anda mendapatkan hak penggunaan domain tersebut selama periode tertentu, misalnya satu tahun atau lebih. Setelah periode ini berakhir, Anda harus memperpanjang registrasi domain untuk mempertahankan kepemilikan dan hak penggunaan domain tersebut. Jika Anda tidak memperpanjangnya, domain bisa saja menjadi tersedia bagi orang lain untuk dibeli.
                        </p>

                        <h3>Masa Aktif Web Hosting</h3>
                        <p style="text-align: justify;">
                            Masa aktif web hosting ditentukan oleh jangka waktu langganan yang Anda pilih saat membeli layanan hosting. Banyak penyedia web hosting menawarkan berbagai pilihan periode langganan, seperti bulanan, tahunan, dua tahunan, atau bahkan lebih. Anda harus memastikan untuk memperbarui langganan hosting sebelum periode berakhir agar situs web Anda tetap aktif dan dapat diakses.
                        </p>

                        <i style="text-align: justify;">
                            Penting untuk selalu memastikan bahwa domain dan layanan hosting Anda selalu dalam keadaan aktif dan diperbarui tepat waktu. Jika Anda tidak memperbarui domain atau hosting, situs web Anda mungkin akan menjadi tidak dapat diakses oleh pengunjung, dan data serta konten situs web Anda bisa hilang jika tidak di-backup secara teratur.
                        </i>
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
                            <img src="{{ asset('user/assets/img/blog/blog2.jpg') }}" alt="">
                            <h4><a href="{{ URL::to('/detailblog_seo') }}">Apa itu SEO (Search Engine Optimization)? </a></h4>
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