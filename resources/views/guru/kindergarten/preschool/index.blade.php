@extends('layouts.auth')

@section('judul')
    <title>Guru - Pre School</title>
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
                                @foreach ($siswas as $siswa)
                                    <div class="col-md-2">
                                        <div class="card">
                                            <img src="{{ asset('storage/images/' . $siswa->image) }}" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <a href="{{ route('tkpreschool.individu') }}" class="btn"
                                                    style="background-color: #6FAC45; color: white">{{ $siswa->nama }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
