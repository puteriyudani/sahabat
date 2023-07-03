@extends('layouts.guru')

@section('judul')
    <title>Kindergarten - Kegiatan Pembuka</title>
@endsection

<!-- Masthead2-->
<header class="masthead2">
    <div class="container">
        <div class="masthead2-subheading">Kindergarten</div>
        <div class="masthead2-heading text-uppercase">Kegiatan Pembuka</div>
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
            <h6>Circle Time</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="circletime" id="dongeng" value="dongeng">
                <label class="form-check-label" for="dongeng">Dongeng</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="circletime" id="berdiskusidanbernyanyi"
                    value="berdiskusidanbernyanyi">
                <label class="form-check-label" for="berdiskusidanbernyanyi">Berdiskusi & Bernyanyi</label>
            </div>

            <h6>Surah Pendek</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="surahpendek" id="alfatihah" value="alfatihah">
                <label class="form-check-label" for="alfatihah">Al-Fatihah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="surahpendek" id="alikhlas" value="alikhlas">
                <label class="form-check-label" for="alikhlas">Al-Ikhlas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="surahpendek" id="alfalaq" value="alfalaq">
                <label class="form-check-label" for="alfalaq">Al-Falaq</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="surahpendek" id="annas" value="annas">
                <label class="form-check-label" for="annas">An-Nas</label>
            </div>
        </div>

        <div class="container">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>
@endsection
