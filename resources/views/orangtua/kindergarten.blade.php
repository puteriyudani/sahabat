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
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Filter</button>

                </form>
            </div>

            <div class="container-fluid">
                <h5 style="color: blue">Arrival</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Indikator</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($arrivals as $arrival)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $arrival->tanggal }}</td>
                                    <td>{{ $arrival->indikator }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <br>

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
                                <th scope="col">Outdoor</th>
                                <th scope="col">Circle Time</th>
                                <th scope="col">Doa Pembuka</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembukas as $pembuka)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pembuka->tanggal }}</td>
                                    <td>{{ $pembuka->outdoor }}</td>
                                    <td>{{ $pembuka->circletime }}</td>
                                    <td>{{ $pembuka->doapembuka }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <p style="color: blue">Indikator</p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Indikator</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembukaindikators as $pembukaindikator)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pembukaindikator->tanggal }}</td>
                                    <td>{{ $pembukaindikator->indikator }}</td>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($intis as $inti)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $inti->tanggal }}</td>
                                    <td>{{ $inti->inti }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <p style="color: blue">Indikator</p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Indikator</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($intiindikators as $intiindikator)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $intiindikator->tanggal }}</td>
                                    <td>{{ $intiindikator->indikator }}</td>
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
                                <th scope="col">Buang Air Besar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penutups as $penutup)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $penutup->tanggal }}</td>
                                    <td>{{ $penutup->doa }}</td>
                                    <td>{{ $penutup->bab }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <br>

                <h5>Catatan Guru</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($catatangurus as $catatanguru)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $catatanguru->tanggal }}</td>
                                    <td>{{ $catatanguru->catatan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <br>

                <h5>Catatan Orang Tua</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($catatanorangtuas as $catatanorangtua)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $catatanorangtua->tanggal }}</td>
                                    <td>{{ $catatanorangtua->catatan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

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
