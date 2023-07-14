@extends('layouts.navbar')
@section('content')

<!-- gallery section -->
<section id="gallery" class="gallery">

  <div class="container" data-aos="fade-up" style="padding-top: 5%;">

    <header class="section-header">
      <p>Cek postingan terbaru kami</p>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="gallery-filters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-app">Foto</li>
          <li data-filter=".filter-card">Video</li>
        </ul>
      </div>
    </div>

    <div class="row gy-4 gallery-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 gallery-item filter-app">
        <div class="gallery-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto1.jpeg') }}" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Picture 1</h4>
            <p>Picture</p>
            <div class="gallery-links">
              <a href="{{ asset('user/assets/img/portfolio/foto1.jpeg') }}" data-gallery="galleryGallery" class="gallery-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 gallery-item filter-app">
        <div class="gallery-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto2.jpeg') }}" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Picture 2</h4>
            <p>Picture</p>
            <div class="gallery-links">
              <a href="{{ asset('user/assets/img/portfolio/foto2.jpeg') }}" data-gallery="galleryGallery" class="gallery-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 gallery-item filter-app">
        <div class="gallery-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto3.jpeg') }}" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Picture 3</h4>
            <p>Picture</p>
            <div class="gallery-links">
              <a href="{{ asset('user/assets/img/portfolio/foto3.jpeg') }}" data-gallery="galleryGallery" class="gallery-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 gallery-item filter-app">
        <div class="gallery-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto4.jpeg') }}" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Picture 4</h4>
            <p>Picture</p>
            <div class="gallery-links">
              <a href="{{ asset('user/assets/img/portfolio/foto4.jpeg') }}" data-gallery="galleryGallery" class="gallery-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 gallery-item filter-app">
        <div class="gallery-wrap">
          <img src="{{ asset('user/assets/img/portfolio/foto5.jpeg') }}" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Picture 5</h4>
            <p>Picture</p>
            <div class="gallery-links">
              <a href="{{ asset('user/assets/img/portfolio/foto5.jpeg') }}" data-gallery="galleryGallery" class="gallery-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- end gallery section -->

@endsection