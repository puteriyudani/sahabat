@extends('layouts.auth')

@section('judul')
    <title>Siswa - Play Group</title>
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

                <h5>Play Group</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nama Panggilan</th>
                                <th scope="col">No Induk</th>
                                <th scope="col">Kelompok</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Anak Ke</th>
                                <th scope="col">Nama Ayah</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->panggilan }}</td>
                                    <td>{{ $siswa->noinduk }}</td>
                                    <td>{{ $siswa->kelompok }}</td>
                                    <td>{{ $siswa->tempat_lahir }}</td>
                                    <td>{{ $siswa->tanggal_lahir }}</td>
                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                    <td>{{ $siswa->agama }}</td>
                                    <td>{{ $siswa->anakke }}</td>
                                    <td>{{ $siswa->nama_ayah }}</td>
                                    <td>{{ $siswa->nama_ibu }}</td>
                                    <td>{{ $siswa->alamat }}</td>
                                    @foreach ($ortus as $ortu)
                                        <td>{{ $ortu->nohp }}</td>
                                    @endforeach
                                    <td>
                                        <form action="{{ route('destroyAkun', $siswa->id) }}" method="POST">
                                            <a href="{{ route('editAkun', $siswa->id) }}" style="text-decoration: none;">
                                                edit
                                            </a>

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn mb-1" type="submit">
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
