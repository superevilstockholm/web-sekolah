@extends('App')
@section('title', 'Sekolah Dasar (SD) - SDIT Insan Kamil')
@section('content')
    {{-- Banner / Hero Section --}}
    <section class="bg-light py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div id="bannerCarouselSD" class="carousel slide" data-bs-ride="carousel">
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarouselSD"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Sebelumnya</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarouselSD"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Selanjutnya</span>
                        </button>
                        {{-- Indicator --}}
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#bannerCarouselSD" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#bannerCarouselSD" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Sambutan --}}
    <div class="container">
        <div class="row text-center">
            <h2 class="fw-bold text-success">Selamat Datang di SDIT Insan Kamil</h2>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row align-items-stretch">
                {{-- Teks --}}
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <p class="mb-3">
                        SDIT Insan Kamil hadir untuk membentuk generasi muslim yang unggul dalam ilmu pengetahuan dan
                        teknologi,
                        serta memiliki akhlak mulia. Dengan pengalaman lebih dari satu dekade, SDIT Insan Kamil menjadi
                        sekolah
                        dasar pilihan bagi orang tua di wilayah Tangerang Selatan dan sekitarnya.
                    </p>
                    <p>
                        Visi SDIT Insan Kamil adalah
                        <strong>"Menjadi Sekolah Dasar Islam Unggulan yang Mencetak Generasi Qur’ani, Cerdas, Kreatif, dan
                            Mandiri"</strong>.
                    </p>
                </div>
                {{-- Gambar --}}
                <div class="col-lg-5 text-center mb-lg-5">
                    {{-- versi desktop --}}
                    <img src="/images/tk-2.png" class="img-fluid rounded shadow d-none d-lg-block w-100 h-100"
                        style="max-width: 100%; height: 100%; object-fit: cover;" alt="Foto Sambutan">
                    {{-- versi mobile --}}
                    <img src="/images/tk-2.png" class="img-fluid rounded shadow d-block d-lg-none w-100"
                        style="max-height: 300px; object-fit: cover;" alt="Foto Sambutan">
                </div>
            </div>
        </div>
    </section>
    {{-- Berita Terkini --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="fw-bold text-center mb-5 text-success">Berita Terkini</h3>
            <div class="row g-4">
                {{-- Berita 1 --}}
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/sd-1.png" class="card-img-top rounded-top" alt="Berita 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2">Pendaftaran PPDB SDIT Insan Kamil</h5>
                            <p class="card-text flex-grow-1">
                                Bergabunglah bersama kami dalam penerimaan siswa baru tahun ajaran 2025 - 2026.
                            </p>
                            <a href="#" class="btn btn-success btn-sm mt-auto align-self-start">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                {{-- Berita 2 --}}
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/sd-1.png" class="card-img-top rounded-top" alt="Berita 2">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2">Kegiatan Ekstrakurikuler</h5>
                            <p class="card-text flex-grow-1">
                                Temukan berbagai kegiatan pengembangan diri siswa di SDIT Insan Kamil.
                            </p>
                            <a href="#" class="btn btn-success btn-sm mt-auto align-self-start">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                {{-- Berita 3 --}}
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/sd-1.png" class="card-img-top rounded-top" alt="Berita 3">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2">Prestasi Siswa</h5>
                            <p class="card-text flex-grow-1">
                                Berbagai prestasi akademik dan non-akademik telah diraih siswa SDIT Insan Kamil.
                            </p>
                            <a href="#" class="btn btn-success btn-sm mt-auto align-self-start">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Lokasi / Maps --}}
    <section class="py-5">
        <div class="container">
            <h3 class="fw-bold text-center mb-4 text-success">Lokasi Kami</h3>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="ratio ratio-21x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.334437246126!2d106.5931052740963!3d-6.219554460914241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9211034996f%3A0xfca2c1608111540c!2sPT.%20Penukal%20Integritas%20Indonesia!5e0!3m2!1sid!2sid!4v1756449988997!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Footer Info --}}
    <section class="py-4 text-black text-5xl">
        <div class="container text-start">
            <p class="mb-1"><strong>Personal Info</strong></p>
            <p class="mb-1">📞 Admin: 0812-xxxx-xxxx</p>
            <p class="mb-1">📱 Instagram: @sditinsankamil</p>
            <p class="mb-1">📺 YouTube: SDIT Insan Kamil Official</p>
            <p class="mb-1">🌐 <a href="http://sd.insankamil.sch.id" target="_blank"
                    class="text-black">sd.insankamil.sch.id</a></p>
            <p class="mb-0">📍 Alamat lengkap SDIT Insan Kamil, Tangerang Selatan, Banten</p>
        </div>
    </section>
    <style>
        .navbar-container nav .nav-link,
        .navbar-container nav .navbar-brand {
            color: rgba(0, 0, 0, 0.75) !important;
            /* Teks hitam setelah scroll */
        }
        .navbar-container nav .nav-link:hover {
            color: rgba(0, 0, 0, 1) !important;
        }
    </style>
@endsection
