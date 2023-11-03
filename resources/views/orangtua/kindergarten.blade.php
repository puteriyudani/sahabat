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
                <form action="{{ route('ortu.kindergarten', ['siswa' => $siswa]) }}" method="GET">
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
            {{-- end tgl --}}

            <div class="container-fluid">

                <h5>Arrival</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Indikator</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($arrivals as $arrival)
                                    <td class="col-md-1">{{ $loop->iteration }}</td>
                                    <td class="col-md-2">{{ $arrival->indikator }}</td>
                                    <td class="col-md-2"></td>
                                    <td class="col-md-2"></td>
                                    <td class="col-md-2"></td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5>Breakfast</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kudapan Pagi</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($breakfasts as $breakfast)
                                    <td class="col-md-1">{{ $loop->iteration }}</td>
                                    <td class="col-md-2">{{ $breakfast->kudapanpagi }}</td>
                                    <td class="col-md-2">{{ $breakfast->keterangan }}</td>
                                    <td class="col-md-2"></td>
                                    <td class="col-md-2"></td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5>Kegiatan Pembuka</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Outdoor</th>
                                <th scope="col">Circle Time</th>
                                <th scope="col">Doa</th>
                                <th scope="col">Indikator</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($pembukas as $pembuka)
                                    <td class="col-md-1">{{ $loop->iteration }}</td>
                                    <td class="col-md-2">{{ $pembuka->outdoor }}</td>
                                    <td class="col-md-2">{{ $pembuka->circletime }}</td>
                                    <td class="col-md-2">{{ $pembuka->doapembuka }}</td>
                                    <td class="col-md-2">
                                        @foreach ($pembukaindikators as $pembukaindikator)
                                            {{ $pembukaindikator->indikator }}
                                        @endforeach
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5>Kegiatan Inti</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kegiatan Inti</th>
                                <th scope="col">Indikator</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($intis as $inti)
                                    <td class="col-md-1">{{ $loop->iteration }}</td>
                                    <td class="col-md-2">{{ $inti->inti }}</td>
                                    <td class="col-md-2">
                                        @foreach ($intiindikators as $intiindikator)
                                            {{ $intiindikator->indikator }}
                                        @endforeach
                                    </td>
                                    <td class="col-md-2"></td>
                                    <td class="col-md-2"></td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5>Kegiatan Penutup</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Doa</th>
                                <th scope="col">Buang Air Besar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($penutups as $penutup)
                                    <td class="col-md-1">{{ $loop->iteration }}</td>
                                    <td class="col-md-2">{{ $penutup->doa }}</td>
                                    <td class="col-md-2">{{ $penutup->bab }}</td>
                                    <td class="col-md-2"></td>
                                    <td class="col-md-2"></td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5>Catatan Guru</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($catatangurus as $catatanguru)
                                    <td class="col-md-1">{{ $loop->iteration }}</td>
                                    <td class="col-md-8">{{ $catatanguru->catatan }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5>Catatan Orang Tua</h5>
                @if (Request::has('tanggal'))
                    <a
                        href="{{ route('catatanorangtua.create', ['siswa' => $siswa->id, 'tanggal' => Request::get('tanggal')]) }}" style="color: green">Input
                        Catatan</a>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($catatanorangtuas as $catatanorangtua)
                                    <td class="col-md-1">{{ $loop->iteration }}</td>
                                    <td class="col-md-8">{{ $catatanorangtua->catatan }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
