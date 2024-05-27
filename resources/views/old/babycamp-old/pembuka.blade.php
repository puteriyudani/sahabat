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
    <form action="{{ route('pembuka.storebaby') }}" method="POST">
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
            <h6>Circle Time</h6>

            <div class="row mb-3">
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="circletime" id="dongeng" value="dongeng">
                    <label class="form-check-label" for="dongeng">Dongeng</label>
                </div>
                <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="circletime" id="berdiskusidanbernyanyi"
                        value="berdiskusidanbernyanyi">
                    <label class="form-check-label" for="berdiskusidanbernyanyi">Berdiskusi & Bernyanyi</label>
                </div>
            </div>

            <h6>Surah Pendek</h6>

            <div class="row">
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="surahpendek" id="alfatihah" value="alfatihah">
                    <label class="form-check-label" for="alfatihah">Al-Fatihah</label>
                </div>
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="surahpendek" id="alikhlas" value="alikhlas">
                    <label class="form-check-label" for="alikhlas">Al-Ikhlas</label>
                </div>
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="surahpendek" id="alfalaq" value="alfalaq">
                    <label class="form-check-label" for="alfalaq">Al-Falaq</label>
                </div>
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="surahpendek" id="annas" value="annas">
                    <label class="form-check-label" for="annas">An-Nas</label>
                </div>
            </div>
        </div>

        <div class="container">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>
@endsection
