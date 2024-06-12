@extends('layout.layout')

@section('title')
    <title>Sahabat - Galery</title>
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
                    <li><a href="{{ route('home') }}">Home<br></a></li>
                    <li><a href="{{ route('galery') }}" class="active">Galery</a></li>
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

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Gallery - Liburan</h1>
                            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                                voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores.
                                Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('galery') }}">Galery</a></li>
                        <li class="current">Liburan</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center mb-5">
                    <div class="col-1">
                        <a href="{{ route('galery') }}">All</a>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('galery.gabut') }}">Gabut</a>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('galery.malming') }}">Malming</a>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('galery.cfncfd') }}">CFN/CFD</a>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('galery.acara') }}">Acara</a>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('galery.jalan') }}">Jalan-jalan</a>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('galery.liburan') }}">Liburan</a>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('galery.lainnya') }}">Lainnya</a>
                    </div>
                </div>

                <div class="row gy-4 justify-content-center">

                    @foreach ($liburans as $liburan)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('storage/images/' . $liburan->images->first()->image) }}" class="img-fluid" alt="">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="{{ asset('storage/images/' . $liburan->images->first()->image) }}" title="{{ $liburan->judul }}"
                                        class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                    <a href="{{ route('galery-detail', $liburan->id) }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->
                    @endforeach

                </div>

            </div>

        </section><!-- /Gallery Section -->

    </main>
@endsection
