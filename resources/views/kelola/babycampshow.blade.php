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
                    @foreach ($pembukababys as $pembukababy)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pembukababy->tanggal }}</td>
                            <td>{{ $pembukababy->circletime }}</td>
                            <td>{{ $pembukababy->surahpendek }}</td>
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
                    @foreach ($intibabys as $intibaby)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $intibaby->tanggal }}</td>
                            <td>{{ $intibaby->inti }}</td>
                            <td>{{ $intibaby->kudapansiang }}</td>
                            <td>{{ $intibaby->keterangan }}</td>
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
                    @foreach ($penutupbabys as $penutupbaby)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penutupbaby->tanggal }}</td>
                            <td>{{ $penutupbaby->doa }}</td>
                            <td>{{ $penutupbaby->snack }}</td>
                            <td>{{ $penutupbaby->bab }}</td>
                            <td>{{ $penutupbaby->tidur }}</td>
                            <td>{{ $penutupbaby->minumsusu }}</td>
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
