@extends('layout.layout')

@section('title')
    <title>Sahabat - Galery Detail</title>
@endsection

@section('header')
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets') }}/img/logo.png" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Home<br></a></li>
                    <li><a href="{{ route('galery') }}" class="active">Galery</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="tiktok"><i class="bi bi-tiktok"></i></a>
            </div>

        </div>
    </header>
@endsection

@section('main')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Gallery Detail</h1>
                            <p class="mb-0">Detail dari Dokumentasi foto-foto kegiatan yang pernah dilakukan bersama.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('galery') }}">Galery</a></li>
                        <li>{{ $galery->kategori }}</li>
                        <li class="current">{{ $galery->judul }}</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Gallery Details Section -->
        <section id="gallery-details" class="gallery-details section">

            <div class="container" data-aos="fade-up">

                <div class="portfolio-details-slider swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "navigation": {
                                "nextEl": ".swiper-button-next",
                                "prevEl": ".swiper-button-prev"
                            },
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            }
                        }
                    </script>

                    <div class="swiper-wrapper align-items-center">
                        @if ($galery->images->isNotEmpty())
                            @foreach ($galeryImages as $index => $item)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/images/' . $item->image) }}" alt="{{ $galery->judul }}">
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/gallery/gallery-8.jpg') }}" alt="{{ $galery->judul }}">
                            </div>
                        @endif
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>


                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="portfolio-description">
                            <h2>{{ $galery->judul }}</h2>
                            <p>{{ $galery->detail }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info">
                            <h3>Galery information</h3>
                            <ul>
                                <li><strong>Kategori</strong> {{ $galery->kategori }}</li>
                                <li><strong>Tanggal</strong> {{ $galery->tanggal }}</li>
                                <li><strong>Link Terkait</strong> <a href="{{ $galery->link }}" target="_blank">{{ $galery->link }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Gallery Details Section -->

    </main>
@endsection
