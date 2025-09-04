@extends('App')
@section('title', 'Taman Kanak-Kanak (TK) - SDIT Insan Kamil')
@section('content')
    {{-- Banner / Hero Section --}}
    <section class="bg-light py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12"> {{-- atur lebar di sini, misal 8/10/12 --}}
                    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded shadow">
                            {{-- Slide 1 --}}
                            <div class="carousel-item active position-relative">
                                <img src="/images/tk.png" class="d-block w-100 img-fluid" alt="Banner 1">
                            </div>
                            {{-- Slide 2 --}}
                            <div class="carousel-item position-relative">
                                <img src="/images/tk-1.png" class="d-block w-100 img-fluid" alt="Banner 2">
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
    <div class="container">
        <div class="row text-center">
            <h2 class="fw-bold text-success">Selamat Datang di TK Islam Al-Azhar BSD</h2>
        </div>
    </div>
    {{-- Sambutan --}}
    <section class="py-5">
        <div class="container">
            <div class="row align-items-stretch">
                {{-- Teks --}}
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <p class="mb-3">
                        TK Islam Al-Azhar BSD berdiri pada tahun 1992 dibawah naungan Yayasan Muslim Bumi Serpong Damai yang
                        terletak di Jalan Puspitaloka Sektor. III.2 BSD Lengkong Gudang, Kecamatan Serpong, Kota Tangerang
                        Selatan, Propinsi Banten ini mendapat respon yang positif dari masyarakat di wilayah Tangerang
                        khususnya BSD, dan sekitarnya. Dari respon yang baik dari masyarakat tersebut perkembangan TK Islam
                        Al-Azhar BSD selalu menjadi sekolah pilihan favorit bagi Orang Tua yang akan menyekolahkan
                        putra-putrinya dijenjang Taman Kanak-kanak. Untuk menambah rasa kepercayaan kepada orang tua /
                        konsumen, terbaru pada tahun 2021 TK Islam Al-Azhar BSD memperoleh Aktreditasi dengan nilai A dari
                        Badan Akreditasi Nasional. TK Islam Al-Azhar BSD mengimplementasikan dengan Kurikulum Merdeka serta
                        menggunakan sistem pembelajaran yang berdiferensiasi. Model Pembelajaran
                        yang digunakan sekolah kami “Pembelajaran Berdiferensiasi”.
                    </p>
                    <p>
                        Visi TK Islam Al-Azhar BSD adalah
                        <strong>"Membentuk Generasi Muslim yang Berakhlak Islami, Berwawasan Luas, Terampil dan
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
                        <img src="/images/tk-3.png" class="card-img-top rounded-top" alt="Berita 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2">Jadwal PPDB 2025 - 2026</h5>
                            <p class="card-text flex-grow-1">
                                Ayo bergabung bersama kami dalam penerimaan siswa baru TK Islam Al-Azhar BSD.
                            </p>
                            <a href="#" class="btn btn-success btn-sm mt-auto align-self-start">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                {{-- Berita 2 --}}
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/tk-4.png" class="card-img-top rounded-top" alt="Berita 2">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2">Free Trial Class Offline</h5>
                            <p class="card-text flex-grow-1">
                                Ikuti kelas percobaan untuk mengenal lebih dekat pembelajaran di TK Islam Al-Azhar BSD.
                            </p>
                            <a href="#" class="btn btn-success btn-sm mt-auto align-self-start">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                {{-- Berita 3 --}}
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/tk-5.png" class="card-img-top rounded-top" alt="Berita 3">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2">Penerimaan Peserta Didik Baru</h5>
                            <p class="card-text flex-grow-1">
                                Daftarkan segera putra/putri Anda untuk tahun ajaran 2025 - 2026.
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
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Footer Info --}}
    <section class="py-4  text-black text-5xl">
        <div class="container text-start">
            <p class="mb-1"><strong>Personal Info</strong></p>
            <p class="mb-1">📞 Admin: 0812-1055-5598</p>
            <p class="mb-1">📱 Instagram: @tkislamalazharbsd</p>
            <p class="mb-1">📺 YouTube: TK Islam Al-Azhar BSD Official</p>
            <p class="mb-1">🌐 <a href="http://tk.alazhar-bsd.sch.id" target="_blank"
                    class="text-black">tk.alazhar-bsd.sch.id</a></p>
            <p class="mb-0">📍 Jl. Puspita Raya No.2, Lengkong Gudang, Serpong, Tangerang Selatan, Banten</p>
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
