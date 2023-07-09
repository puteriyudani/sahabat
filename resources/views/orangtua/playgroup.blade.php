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
                <form action="{{ route('ortu.playgroup', ['siswa' => $siswa]) }}" method="GET">
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
                <h5 style="color: blue">Arrival</h5>
                @foreach ($arrivals as $arrival)
                    <p>{{ $arrival->indikator }}</p>
                @endforeach

                <br>

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
                @foreach ($pembukas as $pembuka)
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Outdoor</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $pembuka->outdoor }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Circle Time</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $pembuka->circletime }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Doa</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $pembuka->doapembuka }}</p>
                        </div>
                    </div>
                @endforeach

                <p style="color: blue">Indikator</p>
                @foreach ($pembukaindikators as $pembukaindikator)
                    <p>{{ $pembukaindikator->indikator }}</p>
                @endforeach

                <br>

                <h5>Kegiatan Inti</h5>
                @foreach ($intis as $inti)
                    <p>{{ $inti->inti }}</p>
                @endforeach

                <p style="color: blue">Indikator</p>
                @foreach ($intiindikators as $intiindikator)
                    <p>{{ $intiindikator->indikator }}</p>
                @endforeach

                <br>

                <h5>Kegiatan Penutup</h5>
                @foreach ($penutups as $penutup)
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Doa</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $penutup->doa }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p>Buang Air Besar</p>
                        </div>
                        <div class="col-sm-2">
                            <p>: {{ $penutup->bab }}</p>
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
