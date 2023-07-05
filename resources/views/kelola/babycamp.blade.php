@extends('layouts.guru')

@section('judul')
    <title>Baby Camp</title>
@endsection

<header class="masthead2">
</header>

@section('main')
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="row">
                @foreach ($siswas as $siswa)
                    <div class="col-lg-3">
                        <div class="team-member">
                            <a href="{{ route('kelolababycamp.show', $siswa->id) }}">
                                <img class="mx-auto rounded-circle" src="{{ asset('/storage/images/' . $siswa->image) }}" alt="..." />
                            </a>
                            <h4>{{ $siswa->panggilan }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
