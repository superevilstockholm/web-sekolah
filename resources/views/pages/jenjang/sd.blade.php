@extends('App')
@section('title', 'Sekolah Dasar (SD) - SDIT Insan Kamil')

@section('content')
    {{-- Banner / Hero Section --}}
    <section class="bg-light py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded shadow">
                            {{-- Slide 1 --}}
                            <div class="carousel-item active position-relative">
                                <img src="/images/sd.png" class="d-block w-100 img-fluid" alt="Banner 1">
                            </div>
                            {{-- Slide 2 --}}
                            <div class="carousel-item position-relative">
                                <img src="/images/sd-1.png" class="d-block w-100 img-fluid" alt="Banner 2">
                            </div>
                        </div>

                        {{-- Control Prev/Next --}}
                        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Sebelumnya</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Selanjutnya</span>
                        </button>

                        {{-- Indicator --}}
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sambutan --}}
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold text-success mb-3">Selamat Datang di SD Islam Terpadu Insan Kamil</h2>
                    <p class="lead text-muted">
                        Tempat belajar yang Islami, menyenangkan, dan mendidik generasi unggul berakhlak mulia.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Program / Informasi --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                {{-- Card 1: PPDB --}}
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <img src="/images/tk-3.png" class="card-img-top rounded-top" alt="PPDB">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Penerimaan Peserta Didik Baru (PPDB)</h5>
                            <p class="card-text text-muted">
                                Informasi lengkap mengenai pendaftaran siswa baru tahun ajaran 2025/2026.
                            </p>
                            <a href="#" class="btn btn-success btn-sm">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>

                {{-- Card 2: Tahfidz --}}
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <img src="/images/tk-4.png" class="card-img-top rounded-top" alt="Tahfidz">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Program Tahfidz</h5>
                            <p class="card-text text-muted">
                                Membina siswa untuk mencintai dan menghafal Al-Qur’an dengan metode yang menyenangkan.
                            </p>
                            <a href="#" class="btn btn-success btn-sm">Lihat Program</a>
                        </div>
                    </div>
                </div>

                {{-- Card 3: Festival / Kegiatan --}}
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <img src="/images/tk-5.png" class="card-img-top rounded-top" alt="Festival">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Festival & Kegiatan Sekolah</h5>
                            <p class="card-text text-muted">
                                Berbagai kegiatan seru untuk mengembangkan bakat, minat, dan kreativitas siswa.
                            </p>
                            <a href="#" class="btn btn-success btn-sm">Jelajahi Kegiatan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        {{-- Fasilitas --}}
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2 class="fw-bold text-success">Fasilitas Unggulan</h2>
                    <p class="text-muted">Mendukung proses belajar yang nyaman dan Islami</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/sd.png" class="card-img-top" alt="Masjid">
                        <div class="card-body text-center">
                            <h6 class="fw-bold">Masjid Sekolah</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/sd-1.png" class="card-img-top" alt="Lab Komputer">
                        <div class="card-body text-center">
                            <h6 class="fw-bold">Laboratorium Komputer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/sd.png" class="card-img-top" alt="Perpustakaan">
                        <div class="card-body text-center">
                            <h6 class="fw-bold">Perpustakaan Islami</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/sd-1.png" class="card-img-top" alt="Lapangan">
                        <div class="card-body text-center">
                            <h6 class="fw-bold">Lapangan Olahraga</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Prestasi --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2 class="fw-bold text-success">Prestasi Siswa</h2>
                    <p class="text-muted">Mencetak generasi berprestasi di bidang akademik & non-akademik</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4">
                        <img src="/images/sd.png" class="mx-auto mb-3" width="100%" alt="">
                        <h6 class="fw-bold">Juara Olimpiade Matematika</h6>
                        <p class="text-muted small">Tingkat Kota 2024</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4">
                        <img src="/images/sd-1.png" class="mx-auto mb-3" width="100%" alt="">
                        <h6 class="fw-bold">Hafidz Qur’an</h6>
                        <p class="text-muted small">30 Juz di usia SD</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4">
                        <img src="/images/sd.png" class="mx-auto mb-3" width="100%" alt="">
                        <h6 class="fw-bold">Juara Futsal</h6>
                        <p class="text-muted small">Tingkat Provinsi 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Galeri --}}
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2 class="fw-bold text-success">Galeri Kegiatan</h2>
                    <p class="text-muted">Potret aktivitas siswa SD IT Insan Kamil</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-3"><img src="/images/sd.png" class="img-fluid rounded shadow-sm" alt=""></div>
                <div class="col-md-3"><img src="/images/sd-1.png" class="img-fluid rounded shadow-sm" alt=""></div>
                <div class="col-md-3"><img src="/images/sd.png" class="img-fluid rounded shadow-sm" alt=""></div>
                <div class="col-md-3"><img src="/images/sd-1.png" class="img-fluid rounded shadow-sm" alt=""></div>
            </div>
        </div>
    </section>

    {{-- Lokasi --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="fw-bold text-center mb-4 text-success">Lokasi Kami</h3>
            <div class="row">
                <div class="col">
                  <div class="ratio ratio-21x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.334437246126!2d106.5931052740963!3d-6.219554460914241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9211034996f%3A0xfca2c1608111540c!2sPT.%20Penukal%20Integritas%20Indonesia!5e0!3m2!1sid!2sid!4v1756449988997!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
