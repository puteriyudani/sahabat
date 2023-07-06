@extends('layouts.guru')

@section('judul')
    <title>Baby Camp</title>
@endsection

<header class="masthead2">
</header>

@section('main')
    <div class="container mt-3">
        <h5>Breakfast</h5>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kudapan Pagi</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($breakfasts as $breakfast)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $breakfast->tanggal }}</td>
                            <td>{{ $breakfast->kudapanpagi }}</td>
                            <td>{{ $breakfast->keterangan }}</td>
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn mb-1" type="submit" style="color: red">
                                        hapus
                                    </button>
                                </form>
                            </td>
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
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembukas as $pembuka)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pembuka->tanggal }}</td>
                            <td>{{ $pembuka->circletime }}</td>
                            <td>{{ $pembuka->surahpendek }}</td>
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn mb-1" type="submit" style="color: red">
                                        hapus
                                    </button>
                                </form>
                            </td>
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
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($intis as $inti)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $inti->tanggal }}</td>
                            <td>{{ $inti->inti }}</td>
                            <td>{{ $inti->kudapansiang }}</td>
                            <td>{{ $inti->keterangan }}</td>
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn mb-1" type="submit" style="color: red">
                                        hapus
                                    </button>
                                </form>
                            </td>
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
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penutups as $penutup)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penutup->tanggal }}</td>
                            <td>{{ $penutup->doa }}</td>
                            <td>{{ $penutup->snack }}</td>
                            <td>{{ $penutup->bab }}</td>
                            <td>{{ $penutup->tidur }}</td>
                            <td>{{ $penutup->minumsusu }}</td>
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn mb-1" type="submit" style="color: red">
                                        hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
