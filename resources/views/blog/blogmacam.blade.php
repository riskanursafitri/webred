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
                        Macam-macam website
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-07-19">19 Juli 2023</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p style="text-align: justify;">
                            Ada berbagai macam jenis website yang dapat dibedakan berdasarkan tujuan, konten, dan fungsi yang mereka miliki. Berikut adalah beberapa contoh macam-macam website:
                        </p>
                        <ol style="text-align: justify;">
                            <li>Blog: Website yang berfokus pada publikasi konten berupa tulisan, gambar, atau video. Biasanya berisi postingan yang disusun berdasarkan tanggal, dan pemilik blog dapat berbagi pandangan, pengalaman, dan informasi terkini mengenai topik tertentu.</li>
                            <li>Situs Berita: Website yang menyajikan berita terkini dan informasi aktual dari berbagai bidang seperti politik, olahraga, bisnis, teknologi, dan lain-lain.</li>
                            <li>E-commerce: Website yang digunakan untuk melakukan transaksi jual beli produk atau layanan secara online. Pelanggan dapat menelusuri katalog produk, menambahkan produk ke keranjang belanja, dan melakukan pembayaran secara elektronik.</li>
                            <li>Portal: Website yang menyediakan berbagai konten dan layanan yang terorganisir dalam kategori tertentu. Portal sering menjadi titik masuk atau pintu gerbang bagi pengguna untuk mengakses berbagai sumber daya dan layanan lainnya di internet.</li>
                            <li>Forum atau Komunitas: Website yang memungkinkan pengguna untuk berinteraksi, berdiskusi, dan berbagi informasi mengenai topik tertentu. Pengguna dapat membuat postingan, memberikan komentar, dan berpartisipasi dalam diskusi.</li>
                            <li>Portofolio atau Personal Website: Website yang digunakan oleh individu untuk memamerkan karya, proyek, atau portofolio mereka. Ini sering digunakan oleh seniman, fotografer, desainer, dan profesional kreatif lainnya.</li>
                            <li>Sosial Media: Website yang memungkinkan pengguna untuk berinteraksi dan berkomunikasi satu sama lain. Ini termasuk platform seperti Facebook, Twitter, Instagram, dan LinkedIn.</li>
                            <li>Situs Pemerintah: Website yang digunakan oleh pemerintah untuk menyediakan informasi publik, layanan, dan interaksi dengan masyarakat.</li>
                            <li>Edukasi atau E-learning: Website yang menyediakan materi pembelajaran, kursus, atau konten edukatif untuk belajar secara online.</li>
                            <li>Streaming Media: Website yang menyediakan konten media seperti video atau audio yang dapat ditonton atau didengarkan secara langsung melalui internet.</li>
                            <li>Search Engines: Website yang digunakan untuk mencari informasi di internet dengan memberikan hasil pencarian berdasarkan kata kunci yang dimasukkan pengguna.</li>
                            <li>Wiki: Website yang digunakan untuk menciptakan dan mengedit konten secara kolaboratif oleh pengguna. Salah satu contoh terkenal adalah Wikipedia.</li>
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
                            <img src="{{ asset('user/assets/img/blog/blog4.jpg') }}" alt="">
                            <h4><a href="{{ URL::to('/detailblog_domain_hosting') }}">Apa itu domain & web hosting?</a></h4>
                            <time datetime="2023-07-19">19 Juli 2023</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('user/assets/img/blog/blog2.jpg') }}" alt="">
                            <h4><a href="{{ URL::to('/detailblog_seo') }}">Apa itu SEO (Search Engine Optimization)?</a></h4>
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