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
            <div class="container-fluid">
                <h5>Breakfast</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Kudapan Pagi</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($breakfasts as $breakfast)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $breakfast->tanggal }}</td>
                                    <td>{{ $breakfast->kudapanpagi }}</td>
                                    <td>{{ $breakfast->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        
                <br>
        
                <h5>Kegiatan Pembuka</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Circle Time</th>
                                <th scope="col">Surah Pendek</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembukababys as $pembukababy)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pembukababy->tanggal }}</td>
                                    <td>{{ $pembukababy->circletime }}</td>
                                    <td>{{ $pembukababy->surahpendek }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        
                <br>
        
                <h5>Kegiatan Inti</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Kegiatan Inti</th>
                                <th scope="col">Kudapan Siang</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($intibabys as $intibaby)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $intibaby->tanggal }}</td>
                                    <td>{{ $intibaby->inti }}</td>
                                    <td>{{ $intibaby->kudapansiang }}</td>
                                    <td>{{ $intibaby->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        
                <br>
        
                <h5>Kegiatan Penutup</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Doa</th>
                                <th scope="col">Snack</th>
                                <th scope="col">Buang Air Besar</th>
                                <th scope="col">Tidur</th>
                                <th scope="col">Minum Susu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penutupbabys as $penutupbaby)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $penutupbaby->tanggal }}</td>
                                    <td>{{ $penutupbaby->doa }}</td>
                                    <td>{{ $penutupbaby->snack }}</td>
                                    <td>{{ $penutupbaby->bab }}</td>
                                    <td>{{ $penutupbaby->tidur }}</td>
                                    <td>{{ $penutupbaby->minumsusu }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
