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
    <div class="container mt-3">
        <form action="" method="POST">

            <h6>Doa</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="keluarrumah" id="keluarrumah" value="option1">
                <label class="form-check-label" for="keluarrumah">Keluar Rumah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="naikkendaraan" id="naikkendaraan" value="option2">
                <label class="form-check-label" for="naikkendaraan">Naik Kendaraan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="orangtua" id="orangtua" value="option2">
                <label class="form-check-label" for="orangtua">Orang Tua</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="selamat" id="selamat" value="option2">
                <label class="form-check-label" for="selamat">Selamat</label>
            </div>

        </form>
    </div>
@endsection
