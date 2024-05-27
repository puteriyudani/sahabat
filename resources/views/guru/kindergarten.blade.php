@extends('layouts.auth')

@section('judul')
    <title>Guru - Kindergarten</title>
    <style>
        .btn.btn-primary.disabled,
        .btn.btn-warning.disabled,
        .btn.btn-success.disabled,
        .btn.btn-danger.disabled {
            pointer-events: none;
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('include.guru.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('include.header-admin')
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('assets') }}/img/welcome/welcome.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="{{ route('tkwelcome.index') }}" class="btn" style="background-color: #6FAC45; color: white">Welcome Mood</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('assets') }}/img/welcome/welcome.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="{{ route('tkmorning.index') }}" class="btn" style="background-color: #006FC0; color: white">Morning Booster</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('assets') }}/img/welcome/welcome.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#" class="btn" style="background-color: #C55B11; color: white">Breakfast</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('assets') }}/img/welcome/welcome.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#" class="btn" style="background-color: #FFBD06; color: white">Islamic Base Learning</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('assets') }}/img/welcome/welcome.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#" class="btn" style="background-color: #515151; color: white">Pre School</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('assets') }}/img/welcome/welcome.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#" class="btn" style="background-color: #833B0B; color: white">Tematik</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('assets') }}/img/welcome/welcome.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#" class="btn" style="background-color: #528236; color: white">Poop & Pee</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('assets') }}/img/welcome/welcome.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#" class="btn" style="background-color: #000000; color: white">Today Videos</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('assets') }}/img/welcome/welcome.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#" class="btn" style="background-color: #BE9000; color: white">Re Calling</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
