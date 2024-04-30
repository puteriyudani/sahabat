@extends('layouts.layout')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Garden School</h1>
            <p>d'happiest <span class="typed" data-typed-items="Islamic pre-school"></span></p>
            <div class="social-links">
                <a href="https://wa.me/6282268081212" class="twitter" target="_blank" style="color: #25D366"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.facebook.com/gardenschool.gardenschool" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/gardenschool_official/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/@gardenschool2246" class="instagram" target="_blank"><i class="bx bxl-youtube"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->
@endsection

@section('main')
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Profil</h2>
                </div>

                <div class="row">

                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets') }}/img/gs.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>Garden School</h3>
                        <p class="fst-italic">
                            Sahabat Daun Indonesia
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tahun Berdiri:</strong> <span>7 Juli 2021</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>https://gardenschoolindonesia.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>Gg. Cahaya, Desa Senggoro, Kab.Bengkalis, Riau</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>gardenschoolindonesia@gmail.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>No WhatsApp:</strong> <span>+6282268081212</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h5>Visi</h5>
                        <p>
                            Menjadi sekolah yang berkualitas dengan menggabungkan Budi Pekerti dan IPTEK sehingga menghasilkan manusia yang Berkarakter, Cerdas, Kreatif, Mandiri.
                        </p>

                        <h5>Tujuan</h5>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <p>Memberi Layanan Perkembangan Anak Usia Dini Kepada Masyarakat Bengkalis</p>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <p>Mitra Tumbuh Kembang anak bersama Orang Tua</p>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <p>Memberikan Layanan PAUD Holistik Integratif</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h5>Misi</h5>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <p>Menyiapkan generasi yang unggul di bidang Imtaq dan Iptek</p>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <p>Membentuk karakter dengan pembiasaan 6 budi pekerti yang baik dan benar, jujur, dapat dipercaya, hemat dan kerja keras</p>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <p>Membentuk sumber daya manusia yang aktif, kreatif, inovatif, dan sportif</p>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <p>Membangun Citra sekolah sebagai Mitra terpercaya di masyarakat</p>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <p>Memberikan jaminan pelayanan yang prima dalam berbagai hal untuk mendukung proses belajar dan bekerja yang harmonis dan selaras</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Program Section ======= -->
        <section id="program" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Montessory</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 text-center">
                        <h3><a href="{{ route('montessory.youtube') }}" target="_blank">Youtube</a></h3>
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                @foreach ($youtubes as $youtube)
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <iframe width="560" height="315" src="{{ $youtube->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            <br>
                                            <h3>{{ $youtube->judul }}</h3>
                                            <p>{{ $youtube->keterangan }}</p>
                                        </div>
                                    </div><!-- End testimonial item -->
                                @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center">
                        <h3><a href="{{ route('montessory.pdf') }}" target="_blank">PDF</a></h3>
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                @foreach ($pdfs as $pdf)
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <embed src="{{ asset('/storage/file/' . $pdf->file) }}" type="application/pdf" width="500" height="300" />
                                            <br>
                                            <h3>{{ $pdf->judul }}</h3>
                                            <p>{{ $pdf->keterangan }}</p>
                                        </div>
                                    </div><!-- End testimonial item -->
                                @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Program Section -->

    </main><!-- End #main -->
@endsection
