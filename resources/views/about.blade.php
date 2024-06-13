@extends('layout.layout')

@section('title')
    <title>Sahabat - About</title>
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
                    <li><a href="{{ route('galery') }}">Galery</a></li>
                    <li><a href="{{ route('about') }}" class="active">About</a></li>
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
                            <h1>About</h1>
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
                        <li class="current">About</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                @foreach ($abouts as $about)
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-4">
                            <img src="{{ asset('storage/images/' . $about->image) }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 content">
                            <h2>{{ $about->nama }}</h2>
                            <p class="fst-italic py-3">
                                {{ $about->pengantar }}
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Tgl Lahir:</strong>
                                            <span>{{ $about->tgl_lahir }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong>
                                            <span>{{ $about->umur }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>No HP:</strong>
                                            <span>{{ $about->nohp }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Kota:</strong>
                                            <span>{{ $about->kota }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Tpt Lahir:</strong>
                                            <span>{{ $about->tpt_lahir }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Pendidikan:</strong>
                                            <span>{{ $about->pendidikan }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                            <span>{{ $about->email }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Pekerjaan:</strong>
                                            <span>{{ $about->pekerjaan }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="py-3">
                                {{ $about->tentang }}
                            </p>
                        </div>
                    </div>
                @endforeach

                <div class="row gy-4 mt-5 justify-content-center">
                    {{ $abouts->links('vendor.pagination.custom') }}
                </div>

            </div>

        </section>
        <!-- /About Section -->
    </main>
@endsection
