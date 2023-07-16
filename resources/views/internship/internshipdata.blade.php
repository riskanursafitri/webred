@extends('layouts.navbar')
@section('content')

<!-- data-->
<section id="interndata" class="interndata section-bg" style="padding-top: 10%;">
    <div class="container">

        <header class="section-header">
            <!-- <h2>Blog</h2> -->
            <p>Data Diri</p>
        </header>

        <!-- <div class="row mt-5 justify-content-center">

            <div class="col-lg-10">

                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-4 info">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street<br>New York, NY 535022</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com<br>contact@example.com</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                        </div>
                    </div>
                </div>

            </div>

        </div> -->

        <div class="row mt-2 justify-content-center">
            <div class="col-lg-10">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Alamat" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="No. Hp" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Nama Instansi" required>
                    </div>
                    <!-- <div class="form-group mt-2">
                        <input type="file" class="form-control" name="cv" id="cv" required>
                    </div> -->
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->


@endsection