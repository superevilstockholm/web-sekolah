@extends('App')
@section('title', 'Sekolah Menengah Pertama (SMP) - SMPIT Insan Kamil')
@section('content')
    {{-- Hero Section (Carousel dengan Foto Kepala Sekolah di dalamnya) --}}
    <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/sd.png" class="d-block w-100" alt="Banner 1" style="object-fit: cover; height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="/images/sd-1.png" class="d-block w-100" alt="Banner 2" style="object-fit: cover; height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="/images/sd.png" class="d-block w-100" alt="Kepala Sekolah"
                    style="object-fit: cover; height: 500px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </section>
    {{-- 3 Card Section (Program Unggulan tanpa shadow) --}}
    <section class="py-5" style="background: url('/images/bg-program.jpg') center/cover no-repeat;">
        <div class="container">
            <h3 class="fw-bold text-center mb-5 text-success">Program Unggulan</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0">
                        <img src="/images/tk-3.png" class="card-img-top" alt="Program 1">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">Tahfidz Qur’an</h5>
                            <p>Program unggulan pembinaan hafalan Al-Qur’an bagi siswa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0">
                        <img src="/images/tk-4.png" class="card-img-top" alt="Program 2">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">STEM Learning</h5>
                            <p>Pembelajaran berbasis Sains, Teknologi, Engineering, dan Matematika.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0">
                        <img src="/images/tk-5.png" class="card-img-top" alt="Program 3">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">Ekstrakurikuler</h5>
                            <p>Kegiatan seni, olahraga, dan keterampilan untuk pengembangan minat bakat siswa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- 4 Card Berita & Kegiatan (fix, gambar berbeda, dengan hover zoom-in) --}}
    <section class="py-5 text-white" style="background: url('/images/sd-1.png') center/cover no-repeat;">
        <div class="container">
            <h3 class="fw-bold text-center mb-5">Berita & Kegiatan</h3>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card h-100 border-0 overflow-hidden">
                        <img src="/images/tk-3.png" class="card-img-top zoom-img" alt="Berita 1">
                        <div class="card-body text-dark">
                            <h6 class="fw-bold">Judul Berita 1</h6>
                            <p class="small">Deskripsi singkat berita atau kegiatan sekolah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 overflow-hidden">
                        <img src="/images/tk-4.png" class="card-img-top zoom-img" alt="Berita 2">
                        <div class="card-body text-dark">
                            <h6 class="fw-bold">Judul Berita 2</h6>
                            <p class="small">Deskripsi singkat berita atau kegiatan sekolah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 overflow-hidden">
                        <img src="/images/tk-5.png" class="card-img-top zoom-img" alt="Berita 3">
                        <div class="card-body text-dark">
                            <h6 class="fw-bold">Judul Berita 3</h6>
                            <p class="small">Deskripsi singkat berita atau kegiatan sekolah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 overflow-hidden">
                        <img src="/images/tk-3.png" class="card-img-top zoom-img" alt="Berita 4">
                        <div class="card-body text-dark">
                            <h6 class="fw-bold">Judul Berita 4</h6>
                            <p class="small">Deskripsi singkat berita atau kegiatan sekolah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Visi Misi --}}
    <section class="py-5">
        <div class="container">
            <h3 class="fw-bold text-center mb-4 fst-italic text-dark">
                Where the Bright Future Starts...
            </h3>
            <div class="row align-items-stretch">
                <!-- Gambar -->
                <div class="col-lg-6 text-center">
                    <img src="/images/sph-2.png" alt="Visi Misi" class="img-fluid h-100"
                        style="object-fit:cover; border-radius:12px;">
                </div>
                <!-- Tabs -->
                <div class="col-lg-6 d-flex">
                    <div class="card border-0 shadow-sm w-100 h-100">
                        <div class="card-body d-flex flex-column">
                            <ul class="nav nav-tabs" id="vmtTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="visi-tab" data-bs-toggle="tab"
                                        data-bs-target="#visi" type="button">Visi</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="misi-tab" data-bs-toggle="tab" data-bs-target="#misi"
                                        type="button">Misi</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tujuan-tab" data-bs-toggle="tab"
                                        data-bs-target="#tujuan" type="button">Tujuan</button>
                                </li>
                            </ul>
                            <div class="tab-content mt-3 flex-grow-1">
                                <div class="tab-pane fade show active" id="visi" role="tabpanel">
                                    <p>Terwujudnya generasi muslim yang unggul, berwawasan lingkungan dan kompetitif dalam
                                        era global.</p>
                                </div>
                                <div class="tab-pane fade" id="misi" role="tabpanel">
                                    <ul class="mb-0">
                                        <li>Membentuk siswa berakhlak mulia</li>
                                        <li>Menguasai ilmu pengetahuan dan teknologi</li>
                                        <li>Berwawasan global</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tujuan" role="tabpanel">
                                    <p>Mencetak generasi muslim yang siap menghadapi tantangan era digital & global.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Lokasi / Maps --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="fw-bold text-center mb-4 text-success">Lokasi Kami</h3>
            <div class="ratio ratio-21x9">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.334437246126!2d106.5931052740963!3d-6.219554460914241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9211034996f%3A0xfca2c1608111540c!2sPT.%20Penukal%20Integritas%20Indonesia!5e0!3m2!1sid!2sid!4v1756449988997!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" width="600"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
    {{-- Quotes Carousel --}}
    <section class="py-5 text-white text-center" style="background:#c0392b;">
        <div class="container">
            <!-- Judul Quotes -->
            <h4 id="quotesTitle" class="fw-bold text-center mb-4 fst-italic text-white animate__animated">
                Quotes...
            </h4>
            <div id="quotesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p class="fs-5 animate__animated">"Orang yang berkata jujur akan mendapatkan 3 hal: Kepercayaan,
                            Cinta, dan Rasa Hormat."</p>
                        <small class="animate__animated">- Sayyidina Ali bin Abi Thalib</small>
                    </div>
                    <div class="carousel-item">
                        <p class="fs-5 animate__animated">"Pendidikan adalah senjata paling ampuh untuk mengubah dunia."
                        </p>
                        <small class="animate__animated">- Nelson Mandela</small>
                    </div>
                    <div class="carousel-item">
                        <p class="fs-5 animate__animated">"Barangsiapa bersungguh-sungguh, maka ia akan berhasil."</p>
                        <small class="animate__animated">- HR. Muslim</small>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#quotesCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#quotesCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
    {{-- Footer Info --}}
    <section class="py-4 text-black">
        <div class="container text-start">
            <p class="mb-1"><strong>Personal Info</strong></p>
            <p class="mb-1">📞 Admin: 0812-xxxx-xxxx</p>
            <p class="mb-1">📱 Instagram: @smpitinsankamil</p>
            <p class="mb-1">📺 YouTube: SMP Insan Kamil Official</p>
            <p class="mb-1">🌐 <a href="http://sd.insankamil.sch.id" target="_blank"
                    class="text-black">smp.insankamil.sch.id</a></p>
            <p class="mb-0">📍 Alamat lengkap SMP Insan Kamil, Tangerang Selatan, Banten</p>
        </div>
    </section>
    <style>
        .navbar-container .nav-link,
        .navbar-container .navbar-brand {
            color: #000 !important;
            /* Teks hitam setelah scroll */
        }
    </style>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('quotesCarousel');
        const title = document.getElementById('quotesTitle');
        // Animasi judul berulang (masuk kanan)
        setInterval(() => {
            title.classList.remove('animate__fadeInRight');
            void title.offsetWidth; // reset animasi
            title.classList.add('animate__fadeInRight');
        }, 4000);
        // Saat slide mau berpindah → keluar ke kiri
        carousel.addEventListener('slide.bs.carousel', function(event) {
            let currentItem = event.target.querySelector('.carousel-item.active');
            let currentTexts = currentItem.querySelectorAll('.animate__animated');
            currentTexts.forEach(el => {
                el.classList.remove('animate__fadeInRight');
                void el.offsetWidth;
                el.classList.add('animate__fadeOutLeft');
            });
        });
        // Saat slide sudah berpindah → masuk dari kanan
        carousel.addEventListener('slid.bs.carousel', function(event) {
            let nextItem = event.relatedTarget;
            let texts = nextItem.querySelectorAll('.animate__animated');
            texts.forEach(el => {
                el.classList.remove('animate__fadeOutLeft');
                void el.offsetWidth;
                el.classList.add('animate__fadeInRight');
            });
        });
    });
</script>
