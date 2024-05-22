@extends('layouts.auth')

@section('judul')
    <title>Orang Tua - Siswa</title>
@endsection

@section('content')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('include.ortu.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('include.header-admin')
            <div class="container-fluid">
                <p>*ini tampilan UI UX laporan</p>

                <div class="row align-items-start mobile-no-gutters">
                    <div class="col-8">
                        <blockquote class="blockquote blockquote-custom shadow rounded mt-3 bg-green">
                            <div class="blockquote-custom-icon shadow-sm">
                                <h5>Welcome Mood</h5>
                            </div>
                            <div class="row">
                                <div class="col-3 text-center">
                                    <img src="{{ asset('assets') }}/img/face/almost-happy.png" alt="">
                                    <h1>90%</h1>
                                </div>
                                <div class="col-9">
                                    <h2>Almost Happy</h2>
                                    <p class="mb-0 mt-2">Notifikasi : <a>Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Quod magni rerum inventore sequi. Cum eos sint,
                                            harum autem officia quia sunt pariatur incidunt optio quisquam voluptatem eius
                                            nesciunt cumque tempora!.</a></p>
                                </div>
                            </div>

                            {{-- <footer class="blockquote-footer pt-4 border-top">Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer> --}}
                        </blockquote>

                        <blockquote class="blockquote blockquote-custom shadow rounded bg-yellow">
                            <div class="blockquote-custom-icon shadow-sm">
                                <h5>Islamic Base Learning</h5>
                            </div>
                            <div class="row mobile-no-gutters hadist">
                                <div class="col-4 text-center">
                                    <img src="{{ asset('assets') }}/img/rcq.jpg" class="mt-2" alt="">
                                    <h6>Support By:</h6>
                                    <a>RUMAH CERDAS QURAN</a>
                                    <div class="card text-justify hadist">
                                        <h4>Hafalan Hadist:</h4>
                                        <div class="row mobile-no-gutters yellow">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Lrgn Marah</p>
                                            </div>
                                        </div>
                                        <div class="row mobile-no-gutters yellow">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Mkn & Mnm</p>
                                            </div>
                                        </div>
                                        <div class="row mobile-no-gutters yellow">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Kasih Sayang</p>
                                            </div>
                                        </div>
                                        <div class="row mobile-no-gutters yellow">
                                            <div class="col-1">
                                                <img class="cross" src="{{ asset('assets') }}/img/icon/cross.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Kebersihan</p>
                                            </div>
                                        </div>
                                        <div class="row mobile-no-gutters yellow">
                                            <div class="col-1">
                                                <img class="cross" src="{{ asset('assets') }}/img/icon/cross.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Mntt Ilmu</p>
                                            </div>
                                        </div>
                                        <div class="row mobile-no-gutters yellow">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Sabar</p>
                                            </div>
                                        </div>

                                        <div class="gap"></div>

                                        <div class="status">
                                            <h3>Progress</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h2>Alquran, Hadist dan Doa</h2>
                                    <div class="row mobile-no-gutters quran-doa">
                                        <div class="col-6">
                                            <div class="card quran">
                                                <h4>Hafalan Quran:</h4>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Fatihah</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Ikhlas</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Annas</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Falaq</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Lahab</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>An-Nasr</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Kafirun</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Kautsar</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Maun</p>
                                                    </div>
                                                </div>

                                                <div class="gap"></div>

                                                <div class="status">
                                                    <h3>Tuntas</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card doa">
                                                <h4>Hafalan Doa:</h4>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Makan</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Pasca Makan</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Keluar Rumah</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Naik Kndran</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Kebaikan</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Orang Tua</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Masuk WC</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Masuk Masjid</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Belajar</p>
                                                    </div>
                                                </div>
                                                <div class="row mobile-no-gutters yellow">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Mau Tidur</p>
                                                    </div>
                                                </div>

                                                <div class="status">
                                                    <h3>Tuntas</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="yellow-notif">
                                <p class="mb-0 mt-2">Notifikasi : <a>Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Quod magni rerum inventore sequi. Cum eos sint,
                                        harum autem officia quia sunt pariatur incidunt optio quisquam voluptatem eius
                                        nesciunt cumque tempora!.</a></p>
                            </div>
                        </blockquote>

                        <div class="row mobile-no-gutters pretem">
                            <div class="col-6 grey">
                                <blockquote class="blockquote blockquote-custom shadow rounded mt-3 bg-grey">
                                    <div class="blockquote-custom-icon shadow-sm">
                                        <h5>Pre School</h5>
                                    </div>

                                    <div class="sub">
                                        <div class="row mobile-no-gutters">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Huruf & Membaca</p>
                                            </div>
                                        </div>
                                        <div class="grey-notif">
                                            <p class="mb-0">Notifikasi : <a>Ananda sudah bisa mengenal huruf A</a></p>
                                        </div>
                                    </div>

                                    <div class="sub mt-2">
                                        <div class="row mobile-no-gutters">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Angka & Berhitung</p>
                                            </div>
                                        </div>
                                        <div class="grey-notif">
                                            <p class="mb-0">Notifikasi : <a>Ananda sudah bisa mengenal huruf A</a></p>
                                        </div>
                                    </div>

                                    <div class="sub mt-2">
                                        <div class="row mobile-no-gutters">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Pre Basic English</p>
                                            </div>
                                        </div>
                                        <div class="grey-notif">
                                            <p class="mb-0">Notifikasi : <a>Ananda sudah bisa mengenal huruf A</a></p>
                                        </div>
                                    </div>
                                </blockquote>

                                <blockquote class="blockquote blockquote-custom shadow rounded bg-darkgreen">
                                    <div class="blockquote-custom-icon shadow-sm">
                                        <h5>Poop and Pee</h5>
                                    </div>

                                    <div class="sub">
                                        <div class="row mobile-no-gutters">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Buang Air Besar</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub">
                                        <div class="row mobile-no-gutters">
                                            <div class="col-1">
                                                <img class="check-none" src="{{ asset('assets') }}/img/icon/check-none.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Buang Air Kecil</p>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="col-6 brown">
                                <blockquote class="blockquote blockquote-custom shadow rounded mt-3 bg-brown">
                                    <div class="blockquote-custom-icon shadow-sm">
                                        <h5>Tematik</h5>
                                    </div>

                                    <div class="sub">
                                        <div class="row mobile-no-gutters">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Culture Paradise</p>
                                            </div>
                                        </div>
                                        <div class="brown-notif">
                                            <p class="mb-0">Notifikasi : <a>Hari ini ananda belajar bermain congklak.
                                                    Bermain ini bermanfaat menstimulus logika dan perkembangan otak
                                                    ananda.</a></p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <blockquote class="blockquote blockquote-custom shadow rounded mt-3 bg-blue">
                            <div class="blockquote-custom-icon shadow-sm">
                                <h5>Morning Booster</h5>
                            </div>

                            <div class="row mobile-no-gutters blue">
                                <div class="col-1">
                                    <img class="check" src="{{ asset('assets') }}/img/icon/check.png" alt="">
                                </div>
                                <div class="col">
                                    <p>Senam pagi</p>
                                </div>
                            </div>

                            <div class="row mobile-no-gutters blue">
                                <div class="col-1">
                                    <img class="cross" src="{{ asset('assets') }}/img/icon/cross.png" alt="">
                                </div>
                                <div class="col">
                                    <p>Apel Bendera</p>
                                </div>
                            </div>

                            <div class="row mobile-no-gutters blue">
                                <div class="col-1"></div>
                                <div class="col card">
                                    <p>Circle Time</p>
                                    <div class="row sub mobile-no-gutters blue">
                                        <div class="col-1">
                                            <img class="cross" src="{{ asset('assets') }}/img/icon/cross.png"
                                                alt="">
                                        </div>
                                        <div class="col">
                                            <p>Mendongeng</p>
                                        </div>
                                    </div>
                                    <div class="row sub mobile-no-gutters blue">
                                        <div class="col-1">
                                            <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                alt="">
                                        </div>
                                        <div class="col">
                                            <p>Bernyanyi</p>
                                        </div>
                                    </div>
                                    <div class="row sub mobile-no-gutters blue">
                                        <div class="col-1">
                                            <img class="cross" src="{{ asset('assets') }}/img/icon/cross.png"
                                                alt="">
                                        </div>
                                        <div class="col">
                                            <p>Berdiskusi/Cerita</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="notifikasi">
                                <p class="mb-0">Notifikasi : <a>Ananda mengikuti kegiatan pagi dengan penuh semangat
                                        dan gembira.</a></p>
                            </div>
                        </blockquote>

                        <blockquote class="blockquote blockquote-custom shadow rounded bg-orange">
                            <div class="blockquote-custom-icon shadow-sm">
                                <h5>Breakfast</h5>
                            </div>

                            <div class="menu">
                                <p class="mb-2 mt-2">Menu : <a>Variasi nasi, sop ayam dan tempe goreng,</a></p>
                            </div>

                            <div class="row gizi">
                                <div class="col-4">
                                    <p>Karbohidrat</p>
                                </div>
                                <div class="col">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row gizi">
                                <div class="col-4">
                                    <p>Protein</p>
                                </div>
                                <div class="col">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row gizi">
                                <div class="col-4">
                                    <p>Lemak</p>
                                </div>
                                <div class="col">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 60%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row gizi">
                                <div class="col-4">
                                    <p>Serat</p>
                                </div>
                                <div class="col">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row gizi">
                                <div class="col-4">
                                    <p>Vit.Mineral</p>
                                </div>
                                <div class="col">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mobile-no-gutters orange">
                                <div class="col-7">
                                    <div class="sub">
                                        <div class="row mobile-no-gutters">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Habis</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub">
                                        <div class="row mobile-no-gutters">
                                            <div class="col-1">
                                                <img class="check-none" src="{{ asset('assets') }}/img/icon/check-none.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Bersisa</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub">
                                        <div class="row mobile-no-gutters">
                                            <div class="col-1">
                                                <img class="check-none" src="{{ asset('assets') }}/img/icon/check-none.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Tdk Mkn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 persentase d-flex align-items-center">
                                    <h1>100%</h1>
                                </div>
                            </div>

                            <div class="catatan">
                                <p class="mb-0 mt-2">Catatan : <a>Ananda tidak menyukai makanan yang terbuat dari tahu dan
                                        teri.</a></p>
                            </div>
                        </blockquote>

                        <blockquote class="blockquote blockquote-custom shadow rounded bg-black">
                            <div class="blockquote-custom-icon shadow-sm">
                                <h5>Today Videos</h5>
                            </div>

                            <div class="youtube text-center">
                                <iframe width="280" src="https://www.youtube.com/embed/HOYpAgWPTps?si=1bQCEeIkfL6KZATL"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </blockquote>
                    </div>
                </div>

                <div class="row align-items-start mobile-no-gutters">
                    <div class="col-4"></div>
                    <div class="col-8 recalling">
                        <blockquote class="blockquote blockquote-custom shadow rounded mt-3 bg-mustard">
                            <div class="blockquote-custom-icon shadow-sm">
                                <h5>Re Calling</h5>
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <h2>I'm Perfect Happy</h2>
                                    <p class="mb-0 mt-2">Notifikasi : <a>Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Quod magni rerum inventore sequi. Cum eos sint,
                                            harum autem officia quia sunt pariatur incidunt optio quisquam voluptatem eius
                                            nesciunt cumque tempora!.</a></p>
                                </div>
                                <div class="col-3 text-center emot">
                                    <img src="{{ asset('assets') }}/img/face/happy.png" alt="">
                                    <h1>100%</h1>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
