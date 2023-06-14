@extends('layouts.auth')

@section('judul')
    <title>Akun</title>
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
                <h5>Data Siswa</h5>
                <br>
                <a href="{{ route('siswa.create') }}">Tambah Data</a>
                <div class="row mt-3">
                    <div class="col-sm-2">
                        <a href="{{ route('showKindergarten') }}">
                            <button type="submit" class="btn btn-primary">Kindergarten</button>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('showPlaygroup') }}">
                            <button type="submit" class="btn btn-success">Play Group</button>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('showBabycamp') }}">
                            <button type="submit" class="btn btn-info">Baby Camp</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
