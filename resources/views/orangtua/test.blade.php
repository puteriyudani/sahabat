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
                <div class="row align-items-start">
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
                                    <p class="mb-0 mt-2">Notifikasi : <a>"Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Quod magni rerum inventore sequi. Cum eos sint,
                                            harum autem officia quia sunt pariatur incidunt optio quisquam voluptatem eius
                                            nesciunt cumque tempora!</a>."</p>
                                </div>
                            </div>

                            {{-- <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer> --}}
                        </blockquote>

                        <blockquote class="blockquote blockquote-custom shadow rounded mt-4 bg-yellow">
                            <div class="blockquote-custom-icon shadow-sm">
                                <h5>Islamic Base Learning</h5>
                            </div>
                            <div class="row">
                                <div class="col-4 text-center">
                                    <img src="{{ asset('assets') }}/img/rcq.jpg" class="mt-2" alt="">
                                    <h6>Support By:</h6>
                                    <a>RUMAH CERDAS QURAN</a>
                                    <div class="card text-justify">
                                        <h4>Hafalan Hadist:</h4>
                                        <div class="row">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Larangan Marah</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Mkn & Minum</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Kasih Sayang</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1">
                                                <img class="cross" src="{{ asset('assets') }}/img/icon/cross.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Kebersihan</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1">
                                                <img class="cross" src="{{ asset('assets') }}/img/icon/cross.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Menuntut Ilmu</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1">
                                                <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <p>Sabar</p>
                                            </div>
                                        </div>

                                        <div class="status">
                                            <h3>Progress</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h2>Alquran, Hadist dan Doa</h2>
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <h4>Hafalan Quran:</h4>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Fatihah</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Ikhlas</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Annas</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Falaq</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Lahab</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>An-Nasr</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Kafirun</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Kautsar</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Al-Maun</p>
                                                    </div>
                                                </div>

                                                <div class="status">
                                                    <h3>Tuntas</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card">
                                                <h4>Hafalan Doa:</h4>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Makan</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Pasca Makan</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Keluar Rumah</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Naik Kendaraan</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Kebaikan</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Orang Tua</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Masuk WC</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Masuk Masjid</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="check"
                                                            src="{{ asset('assets') }}/img/icon/check.png"
                                                            alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p>Belajar</p>
                                                    </div>
                                                </div>
                                                <div class="row">
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

                                <div class="yellow-notif">
                                    <p class="mb-0 mt-2">Notifikasi : <a>"Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Quod magni rerum inventore sequi. Cum eos sint,
                                            harum autem officia quia sunt pariatur incidunt optio quisquam voluptatem eius
                                            nesciunt cumque tempora!</a>."</p>
                                </div>
                            </div>

                            {{-- <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer> --}}
                        </blockquote>
                    </div>
                    <div class="col-4">
                        <blockquote class="blockquote blockquote-custom shadow rounded mt-3 bg-blue">
                            <div class="blockquote-custom-icon shadow-sm">
                                <h5>Morning Booster</h5>
                            </div>

                            <div class="row">
                                <div class="col-1">
                                    <img class="check" src="{{ asset('assets') }}/img/icon/check.png" alt="">
                                </div>
                                <div class="col">
                                    <p>Senam pagi</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1">
                                    <img class="cross" src="{{ asset('assets') }}/img/icon/cross.png" alt="">
                                </div>
                                <div class="col">
                                    <p>Apel Bendera</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col card">
                                    <p>Circle Time</p>
                                    <div class="row sub">
                                        <div class="col-1">
                                            <img class="cross" src="{{ asset('assets') }}/img/icon/cross.png"
                                                alt="">
                                        </div>
                                        <div class="col">
                                            <p>Mendongeng</p>
                                        </div>
                                    </div>
                                    <div class="row sub">
                                        <div class="col-1">
                                            <img class="check" src="{{ asset('assets') }}/img/icon/check.png"
                                                alt="">
                                        </div>
                                        <div class="col">
                                            <p>Bernyanyi</p>
                                        </div>
                                    </div>
                                    <div class="row sub">
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
                                <p class="mb-0 mt-2">Notifikasi : <a>"Ananda mengikuti kegiatan pagi dengan penuh semangat
                                        dan gembira</a>."</p>
                            </div>
                            {{-- <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer> --}}
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
