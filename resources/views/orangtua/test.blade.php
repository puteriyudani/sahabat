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
