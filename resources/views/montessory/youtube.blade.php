@extends('layouts.layout')

@section('main')
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>YouTube</h2>
                </div>

                <div class="row">

                    @foreach ($youtubes as $youtube)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <iframe width="320" height="180" src="{{ $youtube->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <h4><a href="">{{ $youtube->judul }}</a></h4>
                                <p>{{ $youtube->keterangan }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->
@endsection
