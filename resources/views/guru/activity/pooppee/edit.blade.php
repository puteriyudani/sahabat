@extends('layouts.auth')

@section('judul')
    <title>Guru - Edit Poop & Pee</title>
    <style>
        .btn.btn-primary.disabled,
        .btn.btn-warning.disabled,
        .btn.btn-success.disabled,
        .btn.btn-danger.disabled {
            pointer-events: none;
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('include.guru.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('include.header-admin')
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Edit Poop & Pee</h5>
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                                        </div>
                                        <fieldset disabled>
                                            <div class="mb-3">
                                                <label for="siswa_id" class="form-label">Nama Siswa</label>
                                                <select id="siswa_id" class="form-select">
                                                    <option>Fatimah</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <div class="mb-3">
                                            <label for="poop" class="form-label">Poop</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="poop"
                                                    id="ya">
                                                <label class="form-check-label" for="ya">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="poop"
                                                    id="tidak">
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pee" class="form-label">Pee</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pee"
                                                    id="ya">
                                                <label class="form-check-label" for="ya">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pee"
                                                    id="tidak">
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="catatan" class="form-label">Catatan</label>
                                            <textarea class="form-control" id="catatan" name="catatan" rows="5"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // JavaScript to set the date input value to today's date if it's not manually changed
        document.addEventListener('DOMContentLoaded', (event) => {
            const dateInput = document.getElementById('tanggal');
            if (!dateInput.value) {
                const today = new Date().toISOString().substr(0, 10);
                dateInput.value = today;
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hiddenSelect = document.getElementById('keterangan');
            const customSelectContainer = document.getElementById('customSelectContainer');
            const images = customSelectContainer.querySelectorAll('img');
            const indikatorElement = document.getElementById('indikator');

            const updateIndikator = () => {
                const keteranganValue = hiddenSelect.value;
                let indikator = '';

                switch (keteranganValue) {
                    case 'Happy':
                        indikator = '100%';
                        break;
                    case 'Almost Happy':
                        indikator = '80%';
                        break;
                    case 'Neutral':
                        indikator = '60%';
                        break;
                    case 'Almost Sad':
                        indikator = '40%';
                        break;
                    case 'Sad':
                        indikator = '20%';
                        break;
                }

                for (let i = 0; i < indikatorElement.options.length; i++) {
                    if (indikatorElement.options[i].text === indikator) {
                        indikatorElement.selectedIndex = i;
                        break;
                    }
                }
            };

            images.forEach(image => {
                image.addEventListener('click', function() {
                    hiddenSelect.value = this.getAttribute('data-value');
                    images.forEach(img => img.style.border = 'none');
                    this.style.border = '2px solid blue';
                    updateIndikator();
                });
            });

            // Initial trigger to set the indicator based on the default select value
            updateIndikator();
        });
    </script>
@endsection
