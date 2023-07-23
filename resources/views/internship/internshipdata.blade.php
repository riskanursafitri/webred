@extends('layouts.navbar')
@section('content')
@push('styles')
<link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">
@endpush

<!-- data-->
<section id="interndata" class="interndata section-bg" style="padding-top: 10%;">
    <div class="container">

        <header class="section-header" data-aos="fade-up">
            <p>Data Diri</p>
        </header>

        <div class="row mt-2 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
                <form method="POST" action="{{ route('internshipdata.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder=" Masukkan Nama Lengkap" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label for="name">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan E-mail" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Alamat</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Masukkan Alamat" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">No. Hp</label>
                        <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Masukkan No. Hp" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Instansi</label>
                        <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Masukkan Nama Instansi" required>
                    </div>
                    <!-- <div class="form-group mt-2">
                        <input type="file" class="form-control" name="cv" id="cv" required>
                    </div> -->
                    <div class="form-group mt-3">
                        <label for="name">CV</label><br>
                        <input type="file" class="form-control custom-file-input" name="file" id="customFile" placeholder="CV" required>
                        <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                    </div>
                    <!-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> -->
                    <!-- <div class="text-center"><button type="submit">Join Internship</button></div> -->
                    <button class="button" data-aos="fade-up">Join Internship</button>
                </form>
            </div>
        </div>

    </div>
</section><!-- End Contact Section -->

@push('scripts')
<script src="{{ asset('user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
@endpush
@endsection