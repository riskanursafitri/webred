@extends('layouts.navbar')
@section('content')

<!-- gallery -->
<section id="portfolio" class="portfolio">

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
        <img src="{{ asset('user/assets/img/portfolio/foto5.jpeg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <!-- <h4>Web 2</h4> -->
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

@endsection