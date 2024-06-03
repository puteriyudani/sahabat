@extends('layouts.auth')

@section('judul')
    <title>Guru - Create Welcome Mood</title>
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
                            <h5 class="card-title fw-semibold mb-4">Edit Welcome Mood</h5>
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
                                            <label for="keterangan" class="form-label">Keterangan</label>
                                            <select id="keterangan" class="form-select hidden-select">
                                                <option value="Happy">Happy</option>
                                                <option value="Almost Happy">Almost Happy</option>
                                                <option value="Neutral">Neutral</option>
                                                <option value="Almost Sad">Almost Sad</option>
                                                <option value="Sad">Sad</option>
                                            </select>
                                            <div class="custom-select-container" id="customSelectContainer">
                                                <img src="{{ asset('auth') }}/images/face/happy.png" alt="Happy"
                                                    data-value="Happy">
                                                <img src="{{ asset('auth') }}/images/face/almost-happy.png"
                                                    alt="Almost Happy" data-value="Almost Happy">
                                                <img src="{{ asset('auth') }}/images/face/neutral.png" alt="Neutral"
                                                    data-value="Neutral">
                                                <img src="{{ asset('auth') }}/images/face/almost-sad.png" alt="Almost Sad"
                                                    data-value="Almost Sad">
                                                <img src="{{ asset('auth') }}/images/face/sad.png" alt="Sad"
                                                    data-value="Sad">
                                            </div>
                                        </div>

                                        <fieldset disabled>
                                            <label for="indikator" class="form-label">Indikator %</label>
                                            <select id="indikator" class="form-select">
                                                <option value="100%">100%</option>
                                                <option value="80%">80%</option>
                                                <option value="60%">60%</option>
                                                <option value="40%">40%</option>
                                                <option value="20%">20%</option>
                                            </select>
                                        </fieldset>
                                        <div class="mb-3">
                                            <label for="notifikasi" class="form-label">Notifikasi</label>
                                            <textarea class="form-control" id="notifikasi" name="notifikasi" rows="5"></textarea>
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
