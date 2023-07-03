@extends('layouts.guru')

@section('judul')
    <title>Kindergarten - Breakfast</title>
@endsection

<!-- Masthead2-->
<header class="masthead2">
    <div class="container">
        <div class="masthead2-subheading">Kindergarten</div>
        <div class="masthead2-heading text-uppercase">Breakfast</div>
    </div>
</header>

@section('main')
    <form action="" method="POST">
        @csrf

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
                            <input type="radio" class="btn-check" name="image" id="{{ $siswa->image }}"
                                value="{{ $siswa->image }}" autocomplete="off">
                            <label class="btn" for="{{ $siswa->image }}">
                                <img class="w-100 h-100" src="{{ asset('/storage/images/' . $siswa->image) }}"
                                    alt="..." width="150px" />
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container mt-3">
            <h6>Kudapan Pagi</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kudapanpagi" id="nasi" value="nasi">
                <label class="form-check-label" for="nasi">
                    Variasi Nasi
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kudapanpagi" id="mie" value="mie">
                <label class="form-check-label" for="mie">
                    Variasi Mie
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kudapanpagi" id="kue" value="kue">
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
