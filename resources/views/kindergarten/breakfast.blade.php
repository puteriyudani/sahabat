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
    <div class="container">
        <div class="row text-center mt-5 mb-5">
            @foreach ($siswas as $siswa)
                <div class="col-md-6">
                    <input type="radio" class="btn-check" name="image" id="image" value="{{ $siswa->image }}"
                        autocomplete="off">
                    <label class="btn" for="image">
                        <img class="img-fluid" src="{{ asset('/storage/images/' . $siswa->image) }}" alt="..." width="150px" />
                    </label>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-3">
        <form action="" method="POST">

            <h6>Kudapan Pagi</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nasi" id="nasi" value="option1">
                <label class="form-check-label" for="nasi">Variasi Nasi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mie" id="mie" value="option2">
                <label class="form-check-label" for="mie">Variasi Mie</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kue" id="kue" value="option2">
                <label class="form-check-label" for="kue">Variasi Kue / Lainnya</label>
            </div>

            <h6>Keterangan</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="habis" id="habis" value="option1">
                <label class="form-check-label" for="habis">Habis</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bersisa" id="bersisa" value="option2">
                <label class="form-check-label" for="bersisa">Bersisa</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tambah" id="tambah" value="option2">
                <label class="form-check-label" for="tambah">Tambah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tidakdimakan" id="tidakdimakan" value="option2">
                <label class="form-check-label" for="tidakdimakan">Tidak Dimakan</label>
            </div>

        </form>
    </div>
@endsection
