@extends('layouts.guru')

@section('judul')
    <title>Kelas - Play Group</title>
@endsection

<!-- Masthead2-->
<header class="masthead2">
    <div class="container">
        <div class="masthead2-subheading">Kelas</div>
        <div class="masthead2-heading text-uppercase">Play Group</div>
    </div>
</header>

@section('main')
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-1">
                </div>
                <div class="col-md-2">
                    <a href="{{ route('playgroup.arrival') }}" style="text-decoration: none">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-sun fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Arrival</h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('playgroup.learning1') }}" style="text-decoration: none">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-book fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Learning 1</h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('playgroup.learning2') }}" style="text-decoration: none">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-bookmark fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Learning 2</h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('playgroup.breakfast') }}" style="text-decoration: none">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Breakfast</h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('playgroup.playingtime') }}" style="text-decoration: none">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-gamepad fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Playing Time</h4>
                    </a>
                </div>
                <div class="col-md-1">
                </div>
            </div>
    </section>
@endsection
