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
                        <img src="/images/ppdb.jpg" class="card-img-top rounded-top" alt="PPDB">
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
                        <img src="/images/tahfidz.jpg" class="card-img-top rounded-top" alt="Tahfidz">
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
                        <img src="/images/festival.jpg" class="card-img-top rounded-top" alt="Festival">
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
@endsection
