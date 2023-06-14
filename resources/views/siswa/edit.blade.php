@extends('layouts.auth')

@section('judul')
    <title>Admin</title>
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
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Forms</h5>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="orangtua_id" class="form-label">Akun Orangtua</label>
                                            <select id="orangtua_id" name="orangtua_id" class="form-select"
                                                aria-label="Default select example">
                                                @foreach ($ortus as $ortu)
                                                    @if ($ortu->id == $siswa->orangtua_id)
                                                        <option value="{{ $ortu->id }}" selected>{{ $ortu->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $ortu->id }}">{{ $ortu->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                aria-describedby="namaHelp" value="{{ $siswa->nama }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="panggilan" class="form-label">Nama Panggilan</label>
                                            <input type="text" class="form-control" id="panggilan" name="panggilan"
                                                aria-describedby="panggilanHelp" value="{{ $siswa->panggilan }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="noinduk" class="form-label">No Induk</label>
                                            <input type="text" class="form-control" id="noinduk" name="noinduk"
                                                aria-describedby="noindukHelp" value="{{ $siswa->noinduk }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelompok" class="form-label">Kelompok</label>
                                            <select id="kelompok" name="kelompok" class="form-select"
                                                aria-label="Default select example">
                                                <option value="{{ $siswa->kelompok }}" selected>{{ $siswa->kelompok }}</option>
                                                <option value="kindergarten">Kindergarten</option>
                                                <option value="playgroup">Play Group</option>
                                                <option value="babycamp">Baby Camp</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                                aria-describedby="tempat_lahirHelp" value="{{ $siswa->tempat_lahir }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal_lahir"
                                                name="tanggal_lahir" aria-describedby="tanggal_lahirHelp" value="{{ $siswa->tanggal_lahir }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-select"
                                                aria-label="Default select example">
                                                <option value="{{ $siswa->jenis_kelamin }}" selected>{{ $siswa->jenis_kelamin }}</option>
                                                <option value="lakilaki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="agama" class="form-label">Agama</label>
                                            <input type="text" class="form-control" id="agama" name="agama"
                                                aria-describedby="agamaHelp" value="{{ $siswa->agama }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="anakke" class="form-label">Anak ke</label>
                                            <input type="text" class="form-control" id="anakke" name="anakke"
                                                aria-describedby="anakkeHelp" value="{{ $siswa->anakke }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                                aria-describedby="nama_ayahHelp" value="{{ $siswa->nama_ayah }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                                aria-describedby="nama_ibuHelp" value="{{ $siswa->nama_ibu }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat"
                                                aria-describedby="alamatHelp" value="{{ $siswa->alamat }}">
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
@endsection
