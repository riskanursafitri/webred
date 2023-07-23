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

<section id="contwrit" class="contwrit" style="padding-top: 10%;">
    <div class="container">

        <header class="section-header" data-aos="fade-up">
            <p>Content Writing</p>
        </header>

        <ul class="nav nav-tabs row d-flex">
            <li class="nav-item col-4" data-aos="zoom-in">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                    <i class="ri-edit-line"></i>
                    <h4 class="d-none d-lg-block">Food Review</h4>
                </a>
            </li>
            <li class="nav-item col-4" data-aos="zoom-in" data-aos-delay="100">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                    <i class="ri-edit-line"></i>
                    <h4 class="d-none d-lg-block">Product Review</h4>
                </a>
            </li>
            <li class="nav-item col-4" data-aos="zoom-in" data-aos-delay="300">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                    <i class="ri-edit-line"></i>
                    <h4 class="d-none d-lg-block">Unique Article</h4>
                </a>
            </li>
        </ul>

        <!-- Food Review -->
        <div class="tab-content" data-aos="fade-up">
            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Jasa Review Produk Makanan</h3>
                        <p style="text-align: justify;">
                            Kami menyediakan jasa me-review produk makanan, minuman serta tempat usaha Anda. Dengan bekal pengalaman kami, kami memberikan penilaian secara profesional dengan indikator tersendiri. Review akan dibuat dalam bentuk media post instagram hingga video youtube.
                        </p>
                        <p style="text-align: justify;" class="fst-italic">
                            If you want to hiring professional food review, then you are in the right place and in the right person. Contact us for details!
                        </p>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="{{ asset('user/assets/img/features-2.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Product Review -->
            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Jasa Review Produk, Jasa & Merk / Branding</h3>
                        <p style="text-align: justify;">
                            Kami siap membantu Anda dengan pelayanan Jasa Review Produk, Jasa & Merk/Branding Usaha Terbaik guna meningkatkan kualitas kepercayaan calon dan konsumen Anda untuk jangka panjang.
                        </p>
                        <p style="text-align: justify;">
                            Kami berikan Anda kesempatan untuk memberikan segala informasi tentang produk, jasa atau merk dagang atau brand produk Anda untuk di pasang di situs kami tanpa batas waktu dan GRATIS tentunya.
                        </p>
                        <p style="text-align: justify;">
                            Fasilitas ini kami berikan semata bentuk kepedulian kami terhadap kemajuan para pelaku bisnis khususnya para UKM untuk bisa terus meningkatkan kualitas diri dan usahanya di mata dunia.
                        </p>

                        <h3>Mengapa jasa review produk perlu dilakukan?</h3>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Meningkatkan kepercayaan calon dan pelanggan Anda, karena artikel Anda menjadi unik dan berada di posisi terbaik di Google.</li>
                            <li><i class="ri-check-double-line"></i> Anda tidak perlu repot dan capek mengurusi SEO, karena optimasi konten ditangani pihak kami.</li>
                            <li><i class="ri-check-double-line"></i> Artikel Anda cepat terdeteksi oleh robot pencari milik Google.</li>
                            <li><i class="ri-check-double-line"></i> Artikel produk atau jasa Anda mempunyai kesempatan dilihat oleh ribuan pengunjung blog ini setiap harinya.</li>
                            <li><i class="ri-check-double-line"></i> Efisien waktu dan tenaga karena tidak perlu melakukan promosi berulang-ulang.</li>
                            <li><i class="ri-check-double-line"></i> Mendapatkan pengunjung dari Search Engine dan Media Sosial GRATIS.</li>
                            <li><i class="ri-check-double-line"></i> Anda hanya cukup membayar secara GRATIS untuk menampilkan konten promosi produk Anda di situs kami.</li>
                        </ul>

                        <h3>Apa saja syarat untuk mendapatkan jasa review produk GRATIS dari kami?</h3>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Konten tidak mengandung perjudian, SARA dan sejenisnya.</li>
                            <li><i class="ri-check-double-line"></i> Konten atau produk yang direview bukan termasuk produk dewasa dan sejenisnya.</li>
                            <li><i class="ri-check-double-line"></i> Konten atau produk tidak termasuk dalam kategori obat terlarang dan sejenisnya.</li>
                            <li><i class="ri-check-double-line"></i> Konten atau produk bukan termasuk sesuatu yang haram menurut Islam seperti jasa peramal dan lain-lain.</li>
                            <li><i class="ri-check-double-line"></i> Konten atau produk buka masuk kategori kencan, perjodohan dan sejenisnya.</li>
                            <li><i class="ri-check-double-line"></i> Konten tidak melanggar Undang-undang yang berlaku di NKRI.</li>
                        </ul>

                        <h3>Lalu apa yang wajib Anda persiapkan untuk jasa review produk GRATIS dari kami ini?</h3>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Anda cukup mengirim artikel review untuk diperiksa kelayakannya (plagiarisme/kualitas tulisan/jumlah kata dan sebagainya) sebelum melakukan pembayaran.</li>
                            <li><i class="ri-check-double-line"></i> Panjang artikel minimal 500 kata (bukan plagiarisme).</li>
                            <li><i class="ri-check-double-line"></i> Maksimal 3 gambar dengan ukuran tidak lebih dari 100 KB (akan di kompres jika melebihi ukuran tersebut).</li>
                            <li><i class="ri-check-double-line"></i> Jika artikel dari kami, maka kami mengenakan biaya tambahan sebesar Rp 100.000,- (berikan deskripsi yang jelas tentang produk atau jasa Anda).</li>
                            <li><i class="ri-check-double-line"></i> Sebutkan keyword dan link url yang Anda targetkan. Maksimal 2 keyword dan 2 link url.</li>
                            <li><i class="ri-check-double-line"></i> Jika Anda tidak memiliki website/blog, maka bisa menggunakan alamat media sosial Anda seperti facebook (fanspage), twitter, instagram dan sebagainya.</li>
                            <li><i class="ri-check-double-line"></i> Di luar dari ketentuan di atas dan atau jika menginginkan perlakuan lebih, maka terdapat harga khusus (negotiable).</li>
                        </ul>

                        <h3>Keuntungan Menggunakan Layanan Kami:</h3>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Proses cepat dan tepat waktu.</li>
                            <p style="text-align: justify;">Setiap pelanggan pasti menginginkan hasil yang cepat dan proses yang cepat. Anda tidak salah pilih karena yang Anda inginkan ada pada kami.</p>
                            <li><i class="ri-check-double-line"></i> Harga murah dan berkualitas.</li>
                            <p style="text-align: justify;">Banyak yang terkecoh dengan harga murah tanpa memikirkan kualitas. Tapi berbeda dengan kami. Layanan kami memberikan harga yang lebih murah dan lebih mengedepankan kualitas.</p>
                            <li><i class="ri-check-double-line"></i> Ditangani oleh Tim yang sudah profesional.</li>
                            <p style="text-align: justify;">Kami memiliki banyak Tim yang sudah profesional. Kami pastikan melakukan survey terlebih dahulu sebelum mengerjakannya sehingga sangat maksimal.</p>
                        </ul>

                        <h3></h3>
                        <p style="text-align: justify;" class="fst-italic">
                            Anda cukup mengirimkan materi artikel Anda (format Ms Word dan Gambar format JPEG) melalui email kami di : redlevlmediatama@gmail.com , cantumkan judul : Materi Jasa Review Produk GRATIS.
                        </p>
                        <br>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="{{ asset('user/assets/img/features-3.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Unique Articles -->
            <div class="tab-pane" id="tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Unique Articles</h3>
                        <p>
                            Apakah Anda Mengalami Hal Ini?
                        <ol>
                            <li>Tidak tahu cara riset kata kunci</li>
                            <li>Merasa harga jasa penulisan artikel sangat mahal</li>
                            <li>Butuh banyak artikel dalam waktu cepat</li>
                            <li>Tidak punya ide untuk menulis</li>
                            <li>Trauma dengan jasa penulis artikel asal-asalan</li>
                            <li>Tidak punya banyak waktu</li>
                        </ol>
                        </p>

                        <p>Jika hal itu yang Anda alami, berarti kami solusinya!</p>
                        <p>Kami melayani jasa penulisan artikel SEO berkualitas (Bahasa Indonesia, Jawa & English) | Paling Murah | Berpengalaman | Legal | Revisi Sepuasnya | Human & SEO Friendly.</p>

                        <ul>
                            <li><i class="ri-check-double-line"></i>Konsultasi Gratis</li>
                            <li><i class="ri-check-double-line"></i>Penulis Profesional dan Berpengalaman</li>
                            <li><i class="ri-check-double-line"></i>Lolos Copyright</li>
                            <li><i class="ri-check-double-line"></i>Revisi Sepuasnya</li>
                            <li><i class="ri-check-double-line"></i>Harga Paling Murah</li>
                            <li><i class="ri-check-double-line"></i>Pengerjaan Cepat</li>
                        </ul>

                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ asset('user/assets/img/unique.png') }}" alt="" class="img-fluid">
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
<!-- <script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script> -->
<script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
@endpush
@endsection