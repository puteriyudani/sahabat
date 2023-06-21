@extends('layouts.auth')

@section('judul')
    <title>Montessory - Youtube</title>
@endsection

@section('content')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('include.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('include.header-admin')
            <div class="container-fluid">

                <h5>Youtube</h5>
                <br>
                <a href="{{ route('youtube.create') }}">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Link</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($youtubes as $youtube)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $youtube->judul }}</td>
                                    <td>{{ $youtube->keterangan }}</td>
                                    <td>
                                        <iframe width="320" height="180" src="{{ $youtube->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </td>
                                    <td>
                                        <form action="{{ route('youtube.destroy', $youtube->id) }}" method="POST">
                                            <a href="{{ route('youtube.edit', $youtube->id) }}" style="text-decoration: none;">
                                                edit
                                            </a>

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn mb-1" type="submit" style="color: red">
                                                hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
