@extends('layouts.guru')

@section('judul')
    <title>Play Group - Kegiatan Pembuka</title>
@endsection

<!-- Masthead2-->
<header class="masthead2">
    <div class="container">
        <div class="masthead2-subheading">Play Group</div>
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
    <form action="{{ route('pembuka.store') }}" method="POST">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <input type="hidden" class="form-control" id="kelas" name="kelas" aria-describedby="kelasHelp"
                        value="playgroup" readonly>
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
            <h6>Outdoor</h6>

            <div class="row mb-3">
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="outdoor" id="senampagi" value="senampagi">
                    <label class="form-check-label" for="senampagi">Senam Pagi</label>
                </div>
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="outdoor" id="apelbendera" value="apelbendera">
                    <label class="form-check-label" for="apelbendera">Apel Bendera</label>
                </div>
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="outdoor" id="lainlain" value="lainlain">
                    <label class="form-check-label" for="lainlain">Lain-lain</label>
                </div>
            </div>

            <h6>Circle Time</h6>

            <div class="row mb-3">
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="circletime" id="dongeng" value="dongeng">
                    <label class="form-check-label" for="dongeng">Dongeng</label>
                </div>
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="circletime" id="sentra" value="sentra">
                    <label class="form-check-label" for="sentra">Sentra</label>
                </div>
                <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="circletime" id="berdiskusidanbernyanyi"
                        value="berdiskusidanbernyanyi">
                    <label class="form-check-label" for="berdiskusidanbernyanyi">Berdiskusi & Bernyanyi</label>
                </div>
            </div>

            <h6>Doa</h6>

            <div class="row">
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="doapembuka" id="kendaraan" value="kendaraan">
                    <label class="form-check-label" for="kendaraan">Naik Kendaraan</label>
                </div>
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="doapembuka" id="orangtua" value="orangtua">
                    <label class="form-check-label" for="orangtua">Orang Tua</label>
                </div>
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="doapembuka" id="selamat" value="selamat">
                    <label class="form-check-label" for="selamat">Selamat</label>
                </div>
                <div class="form-check form-check-inline col-md-2">
                    <input class="form-check-input" type="radio" name="doapembuka" id="anaksoleh" value="anaksoleh">
                    <label class="form-check-label" for="anaksoleh">Anak Sholeh</label>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('playgroup.indikatorpembuka') }}">
                        <button type="button" class="btn btn-success mt-3">Indikator</button>
                    </a>                      
                </div>
            </div>
        </div>
    </form>
@endsection
