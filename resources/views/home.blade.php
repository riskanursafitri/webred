@extends('layouts.navbar')
@section('content')

<!-- hero section -->
<section>

  <div class="container" style="padding-top: 5%;">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up"><b>REDLEVL MEDIATAMA</b></h1>
        <p data-aos="fade-up" data-aos-delay="400">CV Red Levl Mediatama didirikan di Malang 2020 oleh prinsip inti CEO Jr. kami untuk benar-benar menyediakan layanan yang membantu kesuksesan klien. Dengan keyakinannya akan prospek yang bagus dan dengan pengalaman sebagai konsultan SEO selama 5 tahun di perusahaan SEO lainnya, Jr. mencoba mengembangkan usaha SEO dan sub bisnis lainnya seperti Content Writing, Creative Media Services, Website Development, dan Advertising.</p>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="{{ URL::to('/about') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <b>Read More</b>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 home1" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('user/assets/img/home1.png') }}" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section>
<!-- end hero section -->

<main id="main">


  <!-- blog section -->
  <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Blog</h2>
        <p>Recent posts form our Blog</p>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('user/assets/img/blog/blog1.jpg') }}" class="img-fluid" alt=""></div>
            <span class="post-date">29 Juni 2023</span>
            <h3 class="post-title">Bagaimana caranya agar website mudah ditemukan dan ramai pengunjung ?</h3>
            <a href="{{ URL::to('/detailblog') }}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('user/assets/img/blog/blog2.jpg') }}" class="img-fluid" alt=""></div>
            <span class="post-date">29 Juni 2023</span>
            <h3 class="post-title">Apa itu SEO?</h3>
            <a href="{{ URL::to('/detailblog') }}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('user/assets/img/blog/blog3.jpg') }}" class="img-fluid" alt=""></div>
            <span class="post-date">29 Juni 2023</span>
            <h3 class="post-title">Macam-macam website</h3>
            <a href="{{ URL::to('/detailblog') }}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>

  </section>
  <!-- end blog section -->

  <!-- gallery section -->
  <section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Gallery</h2>
        <p>Check our latest post</p>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="gallery-filters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Photo</li>
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

        <!-- <div class="col-lg-4 col-md-6 gallery-item filter-app">
          <div class="gallery-wrap">
            <img src="{{ asset('user/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>Picture 6</h4>
              <p>Picture</p>
              <div class="gallery-links">
                <a href="{{ asset('user/assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="galleryGallery" class="gallery-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div> -->
  </section>
  <!-- end gallery section -->

  <!-- internship section -->
  <section id="internship" class="internship" style="padding-top: 3%;">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Ayo Bergabung!</h3>
            <h2>INTERNSHIP</h2>
            <p>
              Satu-satunya peran Red Levl adalah membantu dengan memberikan arahan, bimbingan, mentor, dan sebagainya. Namun, kunci sukses mencapai level profesional tergantung pada masing-masing individu.
            </p>
            <div class="text-center text-lg-start">
              <a href="{{ URL::to('/internship') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Join Internship</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('user/assets/img/intern.png') }}" class="img-fluid" alt="">

        </div>

      </div>
    </div>

  </section>
  <!-- end internship section -->

  <!-- service section -->
  <section id="services" class="services">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Services</h2>
        <p>Service Yang Kami Berikan</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box one">
            <i class="ri-advertisement-fill icon"></i>
            <h3>Advertising</h3>
            <p>Maksimalkan potensi bisnis Anda dengan jasa advertising kami! Kami membawa solusi advertising yang efektif untuk memperluas pangsa pasar Anda.</p>
            <a href="{{ URL::to('/advertising') }}" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box two">
            <i class="ri-edit-line icon"></i>
            <h3>Content Writing</h3>
            <p>Dapatkan konten yang informatif, menginspirasi, dan memikat untuk membangun keterlibatan pengguna yang kuat dan memperluas jangkauan bisnis Anda secara online.</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box three">
            <i class="ri-star-fill icon"></i>
            <h3>Creative Service</h3>
            <p>Dapatkan konten yang informatif, menginspirasi, dan memikat untuk membangun keterlibatan pengguna yang kuat dan memperluas jangkauan bisnis Anda secara online.</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-box four">
            <i class="ri-user-fill icon"></i>
            <h3>IT Consultant</h3>
            <p>Optimalkan infrastruktur IT Anda dengan jasa konsultan IT kami! Tim konsultan kami yang berpengalaman siap membantu sesuai dengan kebutuhan bisnis Anda.</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-box five">
            <i class="ri-file-edit-line icon"></i>
            <h3>SEO Service</h3>
            <p>Tim ahli SEO kami siap membantu Anda mengoptimalkan peringkat pencarian dan mendapatkan lalu lintas organik yang lebih tinggi ke situs web Anda.</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box six">
            <i class="ri-layout-2-fill icon"></i>
            <h3>Web Development</h3>
            <p>Hadirkan kehadiran online yang menarik dengan jasa pembuatan web kami! Tim profesional kami siap membantu Anda merancang dan mengembangkan situs web yang responsif, fungsional, dan menarik secara visual.</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>

  </section>
  <!-- service section -->


</main><!-- End #main -->

@endsection