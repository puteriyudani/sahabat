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

        <div class="container mt-3">
            <h6>Outdoor</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="outdoor" id="senampagi" value="senampagi">
                <label class="form-check-label" for="senampagi">Senam Pagi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="outdoor" id="apelbendera" value="apelbendera">
                <label class="form-check-label" for="apelbendera">Apel Bendera</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="outdoor" id="lainlain"
                    value="lainlain">
                <label class="form-check-label" for="lainlain">Lain-lain</label>
            </div>

            <h6>Circle Time</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="circletime" id="dongeng" value="dongeng">
                <label class="form-check-label" for="dongeng">Dongeng</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="circletime" id="sentra" value="sentra">
                <label class="form-check-label" for="sentra">Sentra</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="circletime" id="berdiskusidanbernyanyi"
                    value="berdiskusidanbernyanyi">
                <label class="form-check-label" for="berdiskusidanbernyanyi">Berdiskusi & Bernyanyi</label>
            </div>

            <h6>Doa</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="doapembuka" id="kendaraan" value="kendaraan">
                <label class="form-check-label" for="kendaraan">Naik Kendaraan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="doapembuka" id="orangtua" value="orangtua">
                <label class="form-check-label" for="orangtua">Orang Tua</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="doapembuka" id="selamat" value="selamat">
                <label class="form-check-label" for="selamat">Selamat</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="doapembuka" id="anaksoleh" value="anaksoleh">
                <label class="form-check-label" for="anaksoleh">Anak Sholeh</label>
            </div>
        </div>

        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="row">
                    @foreach ($siswas as $siswa)
                        <div class="col-lg-2 col-sm-6 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1"
                                    onclick="setSelectedImage('{{ $siswa->image }}')">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="w-100 h-100" src="{{ asset('/storage/images/' . $siswa->image) }}"
                                        alt="..." />
                                </a>
                                <input type="hidden" name="siswa_id" id="siswa_id" value="{{ $siswa->id }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

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
                                    <h2 class="text-uppercase">Bagaimana Kegiatan Inti Hari Ini?</h2>
                                    <div class="row text-center mt-5 mb-5">
                                        <div class="col-md-6">
                                            <input type="radio" class="btn-check" name="indikator" id="happy"
                                                autocomplete="off">
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
                                                autocomplete="off">
                                            <label class="btn" for="sad">
                                                <span class="fa-stack fa-4x">
                                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                                    <i class="fas fa-face-sad-tear fa-stack-1x fa-inverse"></i>
                                                </span>
                                                <h4 class="my-3" style="color: var(--bs-link-color);">Sad</h4>
                                            </label>
                                        </div>
                                    </div>

                                    {{-- <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        function setSelectedImage(siswaId) {
            document.getElementById('siswa_id').value = siswaId;
        }

        var radioButtons = document.querySelectorAll('#portfolioModal1 input[type="radio"]');

        for (var i = 0; i < radioButtons.length; i++) {
            radioButtons[i].addEventListener('click', function() {
                this.closest('form').submit();
            });
        }
    </script>
@endsection
