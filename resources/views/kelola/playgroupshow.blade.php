@extends('layouts.guru')

@section('judul')
    <title>Play Group</title>
@endsection

<header class="masthead2">
</header>

@section('main')
    <div class="container mt-3">
        <form action="{{ route('kelolaplaygroup.show', ['siswa' => $siswa]) }}" method="GET">
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
        <h5>Arrival</h5>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Indikator</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arrivals as $arrival)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $arrival->tanggal }}</td>
                            <td>{{ $arrival->indikator }}</td>
                            <td>
                                <form action="{{ route('indikator.destroy', $arrival->id) }}" method="POST">
                                    <a href="{{ route('indikator.edit', $arrival->id) }}" style="text-decoration: none;">
                                        <button class="btn btn-warning">edit</button>
                                    </a>
                                    
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
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
                                    <a href="{{ route('breakfast.edit', $breakfast->id) }}" style="text-decoration: none;">
                                        <button class="btn btn-warning">edit</button>
                                    </a>

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
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
                        <th scope="col">Outdoor</th>
                        <th scope="col">Circle Time</th>
                        <th scope="col">Doa Pembuka</th>
                        <th scope="col">Aksi</th>
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
                            <td>
                                <form action="{{ route('pembuka.destroy', $pembuka->id) }}" method="POST">
                                    <a href="{{ route('pembuka.edit', $pembuka->id) }}" style="text-decoration: none;">
                                        <button class="btn btn-warning">edit</button>
                                    </a>
                                    
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
                                        hapus
                                    </button>
                                </form>
                            </td>
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
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembukaindikators as $pembukaindikator)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pembukaindikator->tanggal }}</td>
                            <td>{{ $pembukaindikator->indikator }}</td>
                            <td>
                                <form action="{{ route('indikator.destroy', $pembukaindikator->id) }}" method="POST">
                                    <a href="{{ route('indikator.edit', $pembukaindikator->id) }}" style="text-decoration: none;">
                                        <button class="btn btn-warning">edit</button>
                                    </a>
                                    
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
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
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($intis as $inti)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $inti->tanggal }}</td>
                            <td>{{ $inti->inti }}</td>
                            <td>
                                <form action="{{ route('inti.destroy', $inti->id) }}" method="POST">
                                    <a href="{{ route('inti.edit', $inti->id) }}" style="text-decoration: none;">
                                        <button class="btn btn-warning">edit</button>
                                    </a>
                                    
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
                                        hapus
                                    </button>
                                </form>
                            </td>
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
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($intiindikators as $intiindikator)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $intiindikator->tanggal }}</td>
                            <td>{{ $intiindikator->indikator }}</td>
                            <td>
                                <form action="{{ route('indikator.destroy', $intiindikator->id) }}" method="POST">
                                    <a href="{{ route('indikator.edit', $intiindikator->id) }}" style="text-decoration: none;">
                                        <button class="btn btn-warning">edit</button>
                                    </a>
                                    
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
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
                        <th scope="col">Buang Air Besar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penutups as $penutup)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penutup->tanggal }}</td>
                            <td>{{ $penutup->doa }}</td>
                            <td>{{ $penutup->bab }}</td>
                            <td>
                                <form action="{{ route('penutup.destroy', $penutup->id) }}" method="POST">
                                    <a href="{{ route('penutup.edit', $penutup->id) }}" style="text-decoration: none;">
                                        <button class="btn btn-warning">edit</button>
                                    </a>
                                    
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
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
                                    <a href="{{ route('catatanguru.edit', $catatanguru->id) }}" style="text-decoration: none;">
                                        <button class="btn btn-warning">edit</button>
                                    </a>
                                    
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
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
