@extends('layouts.auth')

@section('judul')
    <title>Admin</title>
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

        @include('include.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('include.header-admin')
            <div class="container-fluid">
                <h5 class="mt-5">Selamat datang di halaman admin</h5>

                <div class="mt-2">
                    <a class="btn btn-primary px-4 me-3 disabled">
                        <p>Admin</p>
                        <h2>{{ $admins }}</h2>
                        <p>Total data Admin</p>
                    </a>
                    <a class="btn btn-warning px-4 me-3 disabled">
                        <p>Guru</p>
                        <h2>{{ $gurus }}</h2>
                        <p>Total data Guru</p>
                    </a>
                    <a class="btn btn-success px-4 me-3 disabled">
                        <p>Orang Tua</p>
                        <h2>{{ $ortus }}</h2>
                        <p>Total data Orang Tua</p>
                    </a>
                    <a class="btn btn-danger px-4 me-3 disabled">
                        <p>Siswa</p>
                        <h2>{{ $siswas }}</h2>
                        <p>Total data Siswa</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
