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
    <div class="container mt-3">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-2 mt-1">
                    <label for="nama" class="form-label">Nama Siswa</label>
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

            <div class="row mt-5">
                <h5 style="color: var(--bs-link-color);">Roll Out Menu</h5>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <p>Karbo</p>
                </div>
                <div class="col-md-2">
                    <input class="form-check-input" type="radio" name="karbo" id="karboya">
                    <label class="form-check-label" for="karboya">Ya</label>

                    <input class="form-check-input" type="radio" name="karbo" id="karbotidak">
                    <label class="form-check-label" for="karbotidak">Tidak</label>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-1">
                    <p>Protein</p>
                </div>
                <div class="col-md-2">
                    <input class="form-check-input" type="radio" name="protein" id="proteinya">
                    <label class="form-check-label" for="proteinya">Ya</label>

                    <input class="form-check-input" type="radio" name="protein" id="proteintidak">
                    <label class="form-check-label" for="proteintidak">Tidak</label>
                </div>
            </div>

            <div class="row text-center mt-5">
                <p style="font-size: 20px">Bagaimana sarapan hari ini?</p>
            </div>

            <div class="row text-center mt-5 mb-5">
                <div class="col-md-6">
                    <input type="radio" class="btn-check" name="breakfast" id="enak" autocomplete="off">
                    <label class="btn" for="enak">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-face-grin-hearts fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" style="color: var(--bs-link-color);">Enak</h4>
                    </label>
                </div>

                <div class="col-md-6">
                    <input type="radio" class="btn-check" name="breakfast" id="tidakenak" autocomplete="off">
                    <label class="btn" for="tidakenak">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-face-frown fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3" style="color: var(--bs-link-color);">Tidak Enak</h4>
                    </label>
                </div>
            </div>
        </form>
    </div>
@endsection
