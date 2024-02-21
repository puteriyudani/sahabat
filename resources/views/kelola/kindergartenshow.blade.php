@extends('layouts.guru')

@section('judul')
    <title>Kindergarten</title>
@endsection

<header class="masthead2">
</header>

@section('main')
    <div class="container mt-3">
        <form action="{{ route('kelolakindergarten.show', ['siswa' => $siswa]) }}" method="GET">
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
        <h5 style="color: blue">Arrival</h5>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Indikator</th>
                        <td class="col-md-2"></td>
                        <td class="col-md-2"></td>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arrivals as $arrival)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">{{ $arrival->indikator }}</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2">
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
                        <th scope="col">Kudapan Pagi</th>
                        <th scope="col">Keterangan</th>
                        <td class="col-md-2"></td>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($breakfasts as $breakfast)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">{{ $breakfast->kudapanpagi }}</td>
                            <td class="col-md-2">{{ $breakfast->keterangan }}</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2">
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
                        <th scope="col">Outdoor</th>
                        <th scope="col">Circle Time</th>
                        <th scope="col">Doa Pembuka</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembukas as $pembuka)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">{{ $pembuka->outdoor }}</td>
                            <td class="col-md-2">{{ $pembuka->circletime }}</td>
                            <td class="col-md-2">{{ $pembuka->doapembuka }}</td>
                            <td class="col-md-2">
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
                        <th scope="col">Indikator</th>
                        <td class="col-md-2"></td>
                        <td class="col-md-2"></td>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembukaindikators as $pembukaindikator)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">{{ $pembukaindikator->indikator }}</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2">
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
                        <th scope="col">Kegiatan Inti</th>
                        <td class="col-md-2"></td>
                        <td class="col-md-2"></td>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($intis as $inti)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">{{ $inti->inti }}</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2">
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
                        <th scope="col">Indikator</th>
                        <td class="col-md-2"></td>
                        <td class="col-md-2"></td>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($intiindikators as $intiindikator)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">{{ $intiindikator->indikator }}</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2">
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
                        <th scope="col">Doa</th>
                        <th scope="col">Buang Air Besar</th>
                        <td class="col-md-2"></td>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penutups as $penutup)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-2">{{ $penutup->doa }}</td>
                            <td class="col-md-2">{{ $penutup->bab }}</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2">
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

        <h5>Catatan Guru</h5>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Catatan</th>
                        <td class="col-md-2"></td>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catatangurus as $catatanguru)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-4">{{ $catatanguru->catatan }}</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2">
                                <form action="{{ route('catatanguru.destroy', $catatanguru->id) }}" method="POST">
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

        <h5>Catatan Orangtua</h5>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catatanorangtuas as $catatanorangtua)
                        <tr>
                            <td class="col-md-1">{{ $loop->iteration }}</td>
                            <td class="col-md-4">{{ $catatanorangtua->catatan }}</td>
                            <td class="col-md-2"></td>
                            <td class="col-md-2"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
