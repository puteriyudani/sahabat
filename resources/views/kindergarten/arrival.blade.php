@extends('layouts.guru')

@section('judul')
    <title>Kindergarten - Arrival</title>
@endsection

<!-- Masthead2-->
<header class="masthead2">
    <div class="container">
        <div class="masthead2-subheading">Kindergarten</div>
        <div class="masthead2-heading text-uppercase">Arrival</div>
    </div>
</header>

@section('main')
    <div class="container mt-3">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-2 mt-1">
                    <label for="nama" class="form-label">Siswa</label>
                </div>
                <div class="col-md-3">
                    <select id="nama" name="nama" class="form-select" aria-label="Default select example">
                        <option selected>- Pilih -</option>
                        @foreach ($siswas as $siswa)
                            <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-2 mt-1">
                    <label for="tanggal" class="form-label">Tanggal</label>
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="tanggalHelp">
                </div>
            </div>

            <div class="row text-center mt-5">
                <p style="font-size: 20px">How are you this morning?</p>
            </div>

            <div class="row text-center mt-5 mb-5">
                <div class="col-md-6">
                    <input type="radio" class="btn-check" name="breakfast" id="happy" autocomplete="off">
                    <label class="btn" for="happy">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-face-smile fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" style="color: var(--bs-link-color);">Happy</h4>
                    </label>
                </div>

                <div class="col-md-6">
                    <input type="radio" class="btn-check" name="breakfast" id="sad" autocomplete="off">
                    <label class="btn" for="sad">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-face-sad-tear fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" style="color: var(--bs-link-color);">Sad</h4>
                    </label>
                </div>
            </div>
        </form>
    </div>
@endsection
