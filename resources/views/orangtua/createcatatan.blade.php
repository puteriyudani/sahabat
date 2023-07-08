@extends('layouts.auth')

@section('judul')
    <title>Catatan Orang Tua</title>
@endsection

@section('content')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('include.ortu.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('include.header-admin')
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <p>Siswa ID: {{ $siswa->id }}</p>
                            <p>Tanggal: {{ $tanggal }}</p>

                            <form action="{{ route('catatanorangtua.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
                                <input type="hidden" name="tanggal" value="{{ $tanggal }}">

                                <div class="mb-3">
                                    <label for="catatan" class="form-label">Catatan</label>
                                    <textarea class="form-control" placeholder="Catatan orangtua" id="catatan" name="catatan"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
