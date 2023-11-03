@extends('layouts.guru')

@section('judul')
    <title>Kindergarten - Kegiatan Inti</title>
@endsection

<!-- Masthead2-->
<header class="masthead2">
    <div class="container">
        <div class="masthead2-subheading">Kindergarten</div>
        <div class="masthead2-heading text-uppercase">Kegiatan Inti</div>
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
    <form action="{{ route('inti.storebaby') }}" method="POST">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <input type="hidden" class="form-control" id="kelas" name="kelas" aria-describedby="kelasHelp"
                        value="babycamp" readonly>
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
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="inti" name="inti"></textarea>
                <label for="inti">Kegiatan Inti</label>
            </div>
        </div>
        <div class="container mt-3">
            <h6>Kudapan Siang</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kudapansiang" id="nasi" value="nasi">
                <label class="form-check-label" for="nasi">
                    Variasi Nasi
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kudapansiang" id="mie" value="mie">
                <label class="form-check-label" for="mie">
                    Variasi Mie
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kudapansiang" id="kue" value="kue">
                <label class="form-check-label" for="kue">
                    Variasi Kue / Lainnya
                </label>
            </div>

            <h6>Keterangan</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="keterangan" id="habis" value="habis">
                <label class="form-check-label" for="habis">Habis</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="keterangan" id="bersisa" value="bersisa">
                <label class="form-check-label" for="bersisa">Bersisa</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="keterangan" id="tambah" value="tambah">
                <label class="form-check-label" for="tambah">Tambah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="keterangan" id="tidakdimakan" value="tidakdimakan">
                <label class="form-check-label" for="tidakdimakan">Tidak Dimakan</label>
            </div>
        </div>

        <div class="container">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>
@endsection
