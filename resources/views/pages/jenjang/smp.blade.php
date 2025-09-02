@extends('App')
@section('title', 'Sekolah Menengah Pertama (SMP) - SMPIT Insan Kamil')

@section('content')
    {{-- Banner / Hero Section --}}
    <section class="bg-light py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div id="bannerCarouselSMP" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded shadow">
                            <div class="carousel-item active">
                                <img src="/images/smp.png" class="d-block w-100 img-fluid" alt="Banner 1">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/smp.png" class="d-block w-100 img-fluid" alt="Banner 2">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarouselSMP" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Sebelumnya</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarouselSMP" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Selanjutnya</span>
                        </button>

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#bannerCarouselSMP" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#bannerCarouselSMP" data-bs-slide-to="1"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sambutan --}}
    <div class="container">
        <div class="row text-center">
            <h2 class="fw-bold text-success">Selamat Datang di SMPIT Insan Kamil</h2>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <p>
                        SMPIT Insan Kamil berkomitmen mencetak generasi muslim yang memiliki wawasan luas, akhlak mulia, serta
                        keterampilan abad 21. Kami menerapkan Kurikulum Merdeka dengan pendekatan pembelajaran aktif, kreatif,
                        dan berbasis proyek.
                    </p>
                    <p>
                        Visi SMPIT Insan Kamil adalah
                        <strong>"Membentuk Generasi Berkarakter Islami, Berprestasi, dan Berdaya Saing Global"</strong>.
                    </p>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="/images/smp.png" class="img-fluid rounded shadow" alt="Foto Sambutan">
                </div>
            </div>
        </div>
    </section>

    {{-- Berita Terkini --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="fw-bold text-center mb-5 text-success">Berita Terkini</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/smp.png" class="card-img-top" alt="Berita 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">PPDB SMPIT 2025/2026</h5>
                            <p>Buka pendaftaran siswa baru tahun ajaran 2025 - 2026.</p>
                            <a href="#" class="btn btn-success btn-sm mt-auto">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/smp.png" class="card-img-top" alt="Berita 2">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Kegiatan Pramuka</h5>
                            <p>Kegiatan wajib yang melatih kemandirian dan kepemimpinan siswa.</p>
                            <a href="#" class="btn btn-success btn-sm mt-auto">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="/images/smp.png" class="card-img-top" alt="Berita 3">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Prestasi Olimpiade</h5>
                            <p>Siswa SMPIT Insan Kamil meraih medali emas dalam olimpiade matematika.</p>
                            <a href="#" class="btn btn-success btn-sm mt-auto">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Lokasi --}}
    <section class="py-5">
        <div class="container">
            <h3 class="fw-bold text-center mb-4 text-success">Lokasi Kami</h3>
            <div class="ratio ratio-21x9">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.334437246126!2d106.5931052740963!3d-6.219554460914241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9211034996f%3A0xfca2c1608111540c!2sPT.%20Penukal%20Integritas%20Indonesia!5e0!3m2!1sid!2sid!4v1756449988997!5m2!1sid!2sid"
                 allowfullscreen loading="lazy"></iframe>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <section class="py-4 text-black">
        <div class="container text-start">
            <p><strong>Personal Info</strong></p>
            <p>📞 Admin: 0812-xxxx-xxxx</p>
            <p>📱 Instagram: @smpitinsankamil</p>
            <p>📺 YouTube: SMPIT Insan Kamil Official</p>
            <p>🌐 <a href="http://smp.insankamil.sch.id" target="_blank" class="text-black">smp.insankamil.sch.id</a></p>
            <p>📍 Alamat lengkap SMPIT Insan Kamil, Tangerang Selatan</p>
        </div>
    </section>
@endsection
