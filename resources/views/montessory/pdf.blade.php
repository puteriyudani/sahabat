@extends('layouts.layout')

@section('main')
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>PDF</h2>
                </div>

                <div class="row">

                    @foreach ($pdfs as $pdf)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <embed src="{{ asset('/storage/file/' . $pdf->file) }}" type="application/pdf" width="300" height="300" />
                                <h4><a href="">{{ $pdf->judul }}</a></h4>
                                <p>{{ $pdf->keterangan }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->
@endsection
