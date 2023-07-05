@extends('layouts.guru')

@section('judul')
    <title>Kelola</title>
@endsection

<!-- Masthead2-->
<header class="masthead2">
</header>

@section('main')
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="{{ route('kelola.kindergarten') }}" style="text-decoration: none">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-plane fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">KinderGarten</h4>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('kelola.playgroup') }}" style="text-decoration: none">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shapes fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Play Group</h4>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('kelola.babycamp') }}" style="text-decoration: none">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-baby-carriage fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Baby Camp</h4>
                    </a>
                </div>
            </div>
    </section>
@endsection
