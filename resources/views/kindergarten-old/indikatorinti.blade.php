@extends('layouts.guru')

@section('judul')
    <title>Kindergarten - Indikator Kegiatan Inti</title>
@endsection

<!-- Masthead2-->
<header class="masthead2">
    <div class="container">
        <div class="masthead2-subheading">Kindergarten</div>
        <div class="masthead2-heading text-uppercase">Indikator Kegiatan Inti</div>
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
    <form action="{{ route('indikator.store') }}" method="POST">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <input type="hidden" class="form-control" id="kelas" name="kelas" aria-describedby="kelasHelp"
                        value="kindergarten" readonly>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <input type="hidden" class="form-control" id="kategori" name="kategori"
                        aria-describedby="kategoriHelp" value="inti" readonly>
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

        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1" onclick="showModal()">
                        <button type="button" class="btn btn-success mt-3">Indikator</button>
                    </a>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>
        </div>

        <!-- Portfolio Modals-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><i class="fas fa-xmark fa-3x"></i>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Bagaimana kegiatan inti hari ini?</h2>
                                    <div class="row text-center mt-5 mb-5">
                                        <div class="col-md-6">
                                            <input type="radio" class="btn-check" name="indikator" id="happy"
                                                value="happy" autocomplete="off">
                                            <label class="btn" for="happy">
                                                <span class="fa-stack fa-4x">
                                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                                    <i class="fas fa-face-smile fa-stack-1x fa-inverse"></i>
                                                </span>
                                                <h4 class="my-3" style="color: var(--bs-link-color);">Happy</h4>
                                            </label>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="radio" class="btn-check" name="indikator" id="sad"
                                                value="sad" autocomplete="off">
                                            <label class="btn" for="sad">
                                                <span class="fa-stack fa-4x">
                                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                                    <i class="fas fa-face-sad-tear fa-stack-1x fa-inverse"></i>
                                                </span>
                                                <h4 class="my-3" style="color: var(--bs-link-color);">Sad</h4>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        function showModal() {
            $('#portfolioModal1').modal('show');
        }
    </script>
@endsection
