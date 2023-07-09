@extends('layouts.auth')

@section('judul')
    <title>Orang Tua - Siswa</title>
@endsection

@section('content')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('include.ortu.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('include.header-admin')
            <div class="container-fluid" style="margin-bottom: -4rem;">
                <form action="{{ route('ortu.babycamp', ['siswa' => $siswa]) }}" method="GET">
                    @csrf

                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-1 mt-1">
                                <label for="tanggal" class="form-label">Tanggal</label>
                            </div>
                            <div class="col-md-3">
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    aria-describedby="tanggalHelp">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <div class="container-fluid" style="margin-bottom: -5rem;">
                @if (Request::has('tanggal'))
                    <div class="row">
                        <div class="col-sm-1">
                            <p>Tanggal</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $tanggal }}</p>
                        </div>
                    </div>
                @endif
            </div>

            <div class="container-fluid">
                <h5>Breakfast</h5>
                @foreach ($breakfasts as $breakfast)
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Kudapan Pagi</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $breakfast->kudapanpagi }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Keterangan</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $breakfast->keterangan }}</p>
                        </div>
                    </div>
                @endforeach
        
                <br>
        
                <h5>Kegiatan Pembuka</h5>
                @foreach ($pembukababys as $pembukababy)
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Circle Time</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $pembukababy->circletime }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Surah Pendek</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $pembukababy->surahpendek }}</p>
                        </div>
                    </div>
                @endforeach
        
                <br>
        
                <h5>Kegiatan Inti</h5>
                @foreach ($intibabys as $intibaby)
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Kegiatan Inti</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $intibaby->inti }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Kudapan Siang</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $intibaby->kudapansiang }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Keterangan</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $intibaby->keterangan }}</p>
                        </div>
                    </div>
                @endforeach
        
                <br>
        
                <h5>Kegiatan Penutup</h5>
                @foreach ($penutupbabys as $penutupbaby)
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Doa</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $penutupbaby->doa }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Snack</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $penutupbaby->snack }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Buang Air Besar</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $penutupbaby->bab }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Tidur</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $penutupbaby->tidur }} kali</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Minum Susu</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $penutupbaby->minumsusu }} kali</p>
                        </div>
                    </div>
                @endforeach

                <br>

                <h5>Catatan Guru</h5>
                @foreach ($catatangurus as $catatanguru)
                    <p>{{ $catatanguru->catatan }}</p>
                @endforeach

                <br>

                <h5>Catatan Orang Tua</h5>
                @foreach ($catatanorangtuas as $catatanorangtua)
                    <p>{{ $catatanorangtua->catatan }}</p>
                @endforeach

                <br>

                @if (Request::has('tanggal'))
                    <a href="{{ route('catatanorangtua.create', ['siswa' => $siswa->id, 'tanggal' => Request::get('tanggal')]) }}">Catatan
                        Orangtua</a>
                @endif

                <br><br>
            </div>
        </div>
    </div>
@endsection
