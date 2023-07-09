@extends('layouts.guru')

@section('judul')
    <title>Baby Camp</title>
@endsection

<header class="masthead2">
</header>

@section('main')
    <div class="container mt-3">
        <form action="{{ route('kelolababycamp.show', ['siswa' => $siswa]) }}" method="GET">
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
                    <div class="col-md-3"><button type="submit" class="btn btn-primary">Filter</button></div>
                </div>
            </div>

        </form>
    </div>

    <div class="container">
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
                                <form action="{{ route('breakfast.destroy', $breakfast->id) }}" method="POST">
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
                                <form action="{{ route('pembuka.destroybaby', $pembukababy->id) }}" method="POST">
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
                                <form action="{{ route('inti.destroybaby', $intibaby->id) }}" method="POST">
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
                                <form action="{{ route('penutup.destroybaby', $penutupbaby->id) }}" method="POST">
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

        <h5>Catatan</h5>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catatans as $catatan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $catatan->tanggal }}</td>
                            <td>{{ $catatan->catatan }}</td>
                            <td>
                                <form action="{{ route('catatanguru.destroy', $catatan->id) }}" method="POST">
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
