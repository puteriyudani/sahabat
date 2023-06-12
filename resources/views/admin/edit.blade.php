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
                                    <form action="{{ route('updateAkun', $user->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                aria-describedby="nameHelp" value="{{ $user->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nohp" class="form-label">No Hp</label>
                                            <input type="text" class="form-control" id="nohp" name="nohp"
                                                aria-describedby="nohpHelp" value="{{ $user->nohp }}">
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label for="old_password">Old Password</label>
                                            <input type="password" name="old_password" id="old_password"
                                                class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="new_password">New Password</label>
                                            <input type="password" name="new_password" id="new_password"
                                                class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="new_password_confirmation">Confirmation New Password</label>
                                            <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                                class="form-control" required>
                                        </div> --}}
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
