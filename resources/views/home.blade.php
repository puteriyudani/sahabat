@extends('layout.layout')

@section('title')
    <title>Sahabat - Home</title>
@endsection

@section('header')
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('assets') }}/img/logo.png" alt=""> -->
                <i class="bi bi-camera"></i>
                <h1 class="sitename">Sahabat</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}" class="active">Home<br></a></li>
                    <li><a href="{{ route('galery') }}">Galery</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>
    </header>
@endsection

@section('main')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                        <h2><span>I'm </span><span class="underlight">Jenny Wilson</span> a Professional<span>
                                Photographer from New York City</span></h2>
                        <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed
                            qui libero. Qui voluptas amet.</p>
                        <a href="{{ route('galery') }}" class="btn-get-started" target="_blank">Look Our Galery<br></a>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">

                    @foreach ($galerys as $galery)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('storage/images/' . $galery->images->first()->image) }}" class="img-fluid" alt="">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="{{ asset('storage/images/' . $galery->images->first()->image) }}" title="{{ $galery->judul }}"
                                        class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                    <a target="_blank" href="{{ route('galery-detail', $galery->id) }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->
                    @endforeach

                </div>

            </div>

        </section><!-- /Gallery Section -->

    </main>
@endsection
