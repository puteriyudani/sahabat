@extends('layouts.guru')

@section('judul')
    <title>Kindergarten - Kegiatan Penutup</title>
@endsection

<!-- Masthead2-->
<header class="masthead2">
    <div class="container">
        <div class="masthead2-subheading">Kindergarten</div>
        <div class="masthead2-heading text-uppercase">Kegiatan Penutup</div>
    </div>
</header>

@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('penutup.store') }}" method="POST">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <input type="hidden" class="form-control" id="kelas" name="kelas" aria-describedby="kelasHelp"
                        value="kindergarten" readonly>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-1 mt-1">
                    <label for="tanggal" class="form-label">Tanggal</label>
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="tanggalHelp">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center mt-5 mb-5">
                @foreach ($siswas as $siswa)
                    <div class="col-md-2">
                        <div class="form-check">
                            <input type="radio" class="btn-check" name="siswa_id" id="{{ $siswa->id }}"
                                value="{{ $siswa->id }}" autocomplete="off">
                            <label class="btn" for="{{ $siswa->id }}">
                                <img class="w-100 h-100" src="{{ asset('/storage/images/' . $siswa->image) }}"
                                    alt="..." width="150px" />
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container mt-3">
            <h6>Doa</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="doa" id="keluarrumah" value="keluarrumah">
                <label class="form-check-label" for="keluarrumah">Keluar Rumah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="doa" id="naikkendaraan" value="naikkendaraan">
                <label class="form-check-label" for="naikkendaraan">Naik Kendaraan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="doa" id="orangtua" value="orangtua">
                <label class="form-check-label" for="orangtua">Orang Tua</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="doa" id="selamat" value="selamat">
                <label class="form-check-label" for="selamat">Selamat</label>
            </div>

            <h6>Buang Air Besar</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bab" id="ya" value="ya">
                <label class="form-check-label" for="ya">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bab" id="tidak" value="tidak">
                <label class="form-check-label" for="tidak">Tidak</label>
            </div>
        </div>

        <div class="container">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>
@endsection
