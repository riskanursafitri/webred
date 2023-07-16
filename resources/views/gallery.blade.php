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

<!-- gallery -->
<section id="portfolio" class="portfolio" style="padding-top: 10%;">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Gallery</h2>
      <p>Check our latest post</p>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-photo">Photo</li>
          <li data-filter=".filter-video">Video</li>
        </ul>
      </div>
    </div>

    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
      
      <div class="col-lg-4 col-md-6 portfolio-item filter-photo">
        <div class="portfolio-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto2.jpeg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Peserta Prakerin SMKN 4 Malang, SMKN 2 Singosari dan Peserta KKN 1, 2 dari ITN Malang</h4>
            <div class="portfolio-links">
              <a href="{{ asset('user/assets/img/portfolio/foto2.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-photo">
        <div class="portfolio-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto1.jpeg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Grafika feat Stemdasi</h4>
            <div class="portfolio-links">
              <a href="{{ asset('user/assets/img/portfolio/foto1.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-photo">
        <div class="portfolio-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto8.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Teaching Factory SMKN 12 Malang</h4>
            <div class="portfolio-links">
              <a href="{{ asset('user/assets/img/portfolio/foto8.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-photo">
        <div class="portfolio-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto7.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>17an SMK Kristen Elim Malang</h4>
            <div class="portfolio-links">
              <a href="{{ asset('user/assets/img/portfolio/foto7.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-photo">
        <div class="portfolio-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto6.jpeg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Grafika Goes To JSS</h4>
            <div class="portfolio-links">
              <a href="{{ asset('user/assets/img/portfolio/foto6.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-photo">
        <div class="portfolio-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto4.jpeg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Monitoring Prakerin SMKN 4 Malang - Grafika</h4>
            <div class="portfolio-links">
              <a href="{{ asset('user/assets/img/portfolio/foto4.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-photo">
        <div class="portfolio-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto3.jpeg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <!-- <h4>Foto Bersama</h4> -->
            <div class="portfolio-links">
              <a href="{{ asset('user/assets/img/portfolio/foto3.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-photo">
        <div class="portfolio-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto5.jpeg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <!-- <h4>Foto Bersama</h4> -->
            <div class="portfolio-links">
              <a href="{{ asset('user/assets/img/portfolio/foto5.jpeg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-video">
        <div class="portfolio-wrap">
          <!-- <img src="{{ asset('user/assets/img/portfolio/foto5.jpeg') }}" class="img-fluid" alt=""> -->
          <video controls poster="https://redlevl.net/assets/video/c52c66735c87292dd331d96145671ed0.mp4"></video>
          <div class="portfolio-info">
            <h4>Dhe Man Coffee</h4>
            <div class="portfolio-links">
              <a href="https://redlevl.net/assets/video/c52c66735c87292dd331d96145671ed0.mp4" data-gallery="portfolioGallery" class="portfokio-lightbox" type="video/mp4"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- end gallery -->

@push('scripts')
<script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
@endpush
@endsection