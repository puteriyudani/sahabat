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
                <a href="{{ route('register') }}"><button type="button" class="btn btn-success m-1 mb-3">Tambah Akun</button></a>

                <h5>Admin</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->nohp }}</td>
                                    <td>
                                        <form action="{{ route('destroyAkun', $admin->id) }}" method="POST">
                                            <a href="{{ route('editAkun', $admin->id) }}" style="text-decoration: none;">
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

                <h5>Guru</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gurus as $guru)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $guru->name }}</td>
                                    <td>{{ $guru->nohp }}</td>
                                    <td>
                                        <form action="{{ route('destroyAkun', $guru->id) }}" method="POST">
                                            <a href="{{ route('editAkun', $guru->id) }}" style="text-decoration: none;">
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

                <h5>Orangtua</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ortus as $ortu)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ortu->name }}</td>
                                    <td>{{ $ortu->nohp }}</td>
                                    <td>
                                        <form action="{{ route('destroyAkun', $ortu->id) }}" method="POST">
                                            <a href="{{ route('editAkun', $ortu->id) }}" style="text-decoration: none;">
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
