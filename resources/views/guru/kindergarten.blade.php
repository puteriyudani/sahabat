@extends('layouts.guru')

@section('judul')
    <title>Kelas - Kindergarten</title>
@endsection

<!-- Masthead2-->
<header class="masthead2">
    <div class="container">
        <div class="masthead2-subheading">Kelas</div>
        <div class="masthead2-heading text-uppercase">Kindergarten</div>
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
                    <a href="{{ route('kindergarten.arrival') }}" style="text-decoration: none">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-sun fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Arrival</h4>
                    </a>
                </div>
                <div class="col-md-1">
                </div>
            </div>
    </section>
@endsection
