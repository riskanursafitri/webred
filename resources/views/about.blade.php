@extends('layouts.navbar')
@section('content')
@push('styles')
<link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">
@endpush

<!-- about -->
<section id="about" class="about" style="padding-bottom: 1%;">

    <div class="container" data-aos="fade-up">

        <div class="row about-tabs" data-aos="fade-up">
            <div class="col-lg-6">
                <h3>About RedLevl Mediatama</h3>

                <ul class="nav nav-pills mb-3">
                    <li>
                        <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Tentang</a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="pill" href="#tab2">Visi</a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="pill" href="#tab3">Misi</a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="pill" href="#tab4">Team</a>
                    </li>
                </ul>
                <!-- tab -->
                <div class="tab-content">

                    <!-- tentang -->
                    <div class="tab-pane fade show active" id="tab1">
                        <p>CV Red Levl Mediatama didirikan di Malang 2020 oleh prinsip inti CEO Jr. kami untuk benar-benar menyediakan layanan yang membantu kesuksesan klien. Dengan keyakinannya akan prospek yang bagus dan dengan pengalaman sebagai konsultan SEO selama 5 tahun di perusahaan SEO lainnya, Jr. mencoba mengembangkan usaha SEO dan sub bisnis lainnya seperti Content Writing, Creative Media Services, Website Development, dan Advertising.</p>
                        <p>Dengan karyawan yang berdedikasi, Red Levl memiliki salah satu profesional pemasaran digital terbesar. Red Levl dipimpin oleh tim manajemen yang berpengalaman, yang memberikan arahan dan dukungan strategis bagi perusahaan. Pendekatan langsung tim manajemen kami telah menjadikan Red Levl sebagai Layanan Media Kreatif terbaik.</p>
                    </div>
                    <!-- end tentang -->

                    <!-- visi -->
                    <div class="tab-pane fade show" id="tab2">
                        <div class="d-flex align-items-center mb-2">
                            <p>Pengembangan operasional Red Levl berpedoman pada visi dan misinya yang membantu menjaga kinerja Perusahaan, dan strategi yang terfokus pada pencapaian target dan kesuksesan sebagai Good Corporate Citizen. Red Levl mempunyai visi Menjadi perusahaan Creative Media Services kelas dunia.</p>
                        </div>

                    </div>
                    <!-- end visi -->

                    <!-- misi -->
                    <div class="tab-pane fade show" id="tab3">
                        <p>Visi dan misi membantu Red Levl untuk selalu memperjuangkan cita-citanya dengan membimbing manajemen dan karyawan saat mereka bekerja sama untuk tujuan bersama yang akan berkontribusi pada kesuksesan jangka panjang Perusahaan. Red Levl mempunyai misi sebagai berikut:</p>
                        <ul>
                            <li>Memberikan layanan terbaik dan solusi ahli untuk semua pelanggan dan mitra kami.</li>
                            <li>Menciptakan lingkungan yang positif bagi seluruh karyawan kami agar mereka dapat bekerja lebih baik dan bangga dengan pekerjaannya.</li>
                            <li>Menjadi acuan dalam penerapan kepatuhan dan tata kelola yang baik bagi industri.</li>
                        </ul>
                    </div>
                    <!-- end misi -->

                    <!-- team -->
                    <div class="tab-pane fade show" id="tab4">
                        <p>Setiap anggota tim kami adalah spesialis di bidangnya. Bersama-sama, kami memastikan Anda berinvestasi di tempat yang memberikan keuntungan terbaik sekaligus membangun loyalitas di setiap poin kontak.</p>
                    </div>
                    <!-- end team -->
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('user/assets/img/home1.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- contact section -->
<section id="contact" class="contact" style="padding-bottom: 7%;">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p>Contact Us</p>
        </header>

        <div class="row">

            <div class="col">

                <div class="row">
                    <div class="col">
                        <div class="info-box">
                            <a href="https://www.google.com/maps/@-7.9345153,112.6721868,21z?entry=ttu" target="_blank"><i class="bi bi-geo-alt"></i></a>
                            <h3>Address</h3>
                            <p>Jl. Dipomanggolo V No 280</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="info-box">
                            <a href="https://wa.me/6281333153153" class="whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></a>
                            <h3>Call Us</h3>
                            <p>+6281-333-153-153</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="info-box">
                            <a href="mailto:redlevlmediatama@gmail.com" class="gmail"><i class="bi bi-envelope"></i></a>
                            <h3>Email Us</h3>
                            <p>redlevlmediatama@gmail.com</p>
                        </div>

                    </div>
                    </form>

                </div>

            </div>

        </div>

</section>
<!-- end contact section -->

@push('scripts')
<script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
@endpush
@endsection