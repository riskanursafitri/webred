@extends('layouts.navbar')
@section('content')

<!-- blog -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up" style="padding-top: 8%;">

        <div class="row">

            <div class="col-lg-8 entries">

                <!-- blog1 -->
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ asset('user/assets/img/blog/blog1.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Bagaimana caranya agar website mudah ditemukan dan ramai pengunjung ?
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2023-06-29">29 Juni, 2023</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            Selain layanan pembuatan website, kami juga menyediakan layanan iklan di Google Ads. Google Ads sendiri merupakan program periklanan online yang dibuat oleh Google untuk menempatkan website / toko online dihalaman pertama dan teratas pencarian Google dan jutaan website yang masuk dalam jaringan Google dengan sistem pembayaran Pay Per Click (Bayar jika ada yang meng-klik dan mengunjungi website anda)
                        </p>
                        <div class="read-more">
                            <a href="{{ URL::to('/detailblog') }}">Read More</a>
                        </div>
                    </div>

                </article>
                <!-- end blog1 -->

                <!-- blog2 -->
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ asset('user/assets/img/blog/blog2.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Apa itu SEO?
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01">29 Juni, 2023</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            SEO adalah singkatan dari Search Engine Optimization. Ini merujuk pada serangkaian praktik dan strategi yang digunakan untuk meningkatkan visibilitas dan peringkat sebuah situs web di hasil pencarian mesin telusur seperti Google, Bing, dan Yahoo.
                        </p>
                        <div class="read-more">
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>

                </article>
                <!-- end blog2 -->

                <!-- blog3 -->
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ asset('user/assets/img/blog/blog3.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        Macam-macam website
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>RedLevl</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01">29 Juni, 2023</time></a></li>
                    </div>

                    <div class="entry-content">
                        <p>
                            Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                            Doloremque est saepe laborum aut. Ipsa cupiditate ex harum at recusandae nesciunt. Ut dolores velit.
                        </p>
                        <div class="read-more">
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>

                </article>
                <!-- end blog3 -->
            </div>

            <!-- side bar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- recent post -->
                    <h3 class="sidebar-title">Yang Disarankan</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                            <img src="{{ asset('user/assets/img/blog/blog1.jpg') }}" alt="">
                            <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('user/assets/img/blog/blog2.jpg') }}" alt="">
                            <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                            <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                            <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                            <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                    </div>
                    <!-- end recent post -->

                </div>
            </div>
            <!-- end side bar -->

            <div class="blog-pagination">
                <ul class="justify-content-center">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>
        </div>
    </div>

</section><!-- End Blog Section -->

@endsection