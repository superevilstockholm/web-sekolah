@extends('App')
@section('content')
    <!-- Hero Section dengan Carousel -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active position-relative">
                    <img src="{{ asset('images/sph-3.png') }}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption text-start animate-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-10">
                                    <h2>Melebihi Pendidikan</h2>
                                    <p class="mb-4">Melebihi kurikulum melalui model holistik berbasis iman yang
                                        membimbing pertumbuhan
                                        dan perkembangan setiap anak.</p>
                                    <a href="#" class="btn btn-lg btn-warning rounded-pill">Pelajari Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('images/sph-4.png') }}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption text-start animate-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-10">
                                    <h2>Memberdayakan Siswa</h2>
                                    <p class="mb-4">Membantu siswa mencapai potensi penuh mereka secara akademik, sosial,
                                        dan spiritual.</p>
                                    <a href="#" class="btn btn-lg btn-warning rounded-pill">Pelajari Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('images/sph-5.png') }}" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption text-start animate-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-10">
                                    <h2>Pandangan Global</h2>
                                    <p class="mb-4">Mempersiapkan siswa menjadi pemimpin masa depan dengan fondasi moral
                                        yang kuat dan wawasan global.</p>
                                    <a href="#" class="btn btn-lg btn-warning rounded-pill ">Pelajari Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tombol Scroll untuk Menjelajahi -->
            <a href="#core-identity" class="scroll-btn">
                <span>Gulir untuk Menjelajahi</span>
                <i class="bi bi-arrow-down"></i>
            </a>
        </div>
    </section>
    <!-- Section 2: Identitas Inti -->
    <section id="core-identity" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <p class="text-muted small mb-4">◊ Identitas Inti Kami</p>
                    <h2 class="fw-bold">
                        <span class="text-primary">Sekolah Kristen Terdepan</span> Internasional <br>
                        di Indonesia
                    </h2>
                </div>
                <div class="col-lg-6">
                    <p class="p-2 mb-0 mt-5">
                        Kami hadir untuk memberkati setiap keluarga yang memilih SPH sebagai rumah kedua mereka dengan
                        pendidikan internasional Kristen yang terpercaya. Lulusan kami dibekali dan diilhami untuk memimpin
                        dan melayani di mana pun Tuhan menempatkan mereka.
                        Pada inti siapa kami, kami dipanggil untuk melayani, dan dengan itu, kami berdedikasi pada
                        pertumbuhan perjalanan iman setiap siswa.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 3: Angka SPH -->
    <section id="sph-numbers" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h3>Fakta Singkat <span class="text-primary">Tentang SPH</span></h3>
            </div>
            <!-- Baris 1 -->
            <div class="row text-center g-4 gy-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-people fs-1 text-primary"></i>
                        <h4 class="mt-3">2,400+</h4>
                        <p class="small mb-0">Siswa</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-mortarboard fs-1 text-primary"></i>
                        <h4 class="mt-3">3,000+</h4>
                        <p class="small mb-0">Alumni</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-star fs-1 text-primary"></i>
                        <h4 class="mt-3">30+</h4>
                        <p class="small mb-0">Tahun Keunggulan</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-globe fs-1 text-primary"></i>
                        <h4 class="mt-3">35</h4>
                        <p class="small mb-0">Kebangsaan</p>
                    </div>
                </div>
            </div>
            <!-- Baris 2 -->
            <div class="row text-center g-4 gy-5 justify-content-center mt-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-trophy fs-1 text-primary"></i>
                        <h4 class="mt-3">1<sup>st</sup></h4>
                        <p class="small mb-0">Sekolah Kristen IB Continuum Pertama di Indonesia</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-person-badge fs-1 text-primary"></i>
                        <h4 class="mt-3">52%</h4>
                        <p class="small mb-0">Guru Ekspatriat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="our-legacy" class="py-5 bg-light">
        <div class="container-fluid  px-4 px-lg-5  position-relative">
            <div class="row">
                <!-- Kiri: gabungan blok teks -->
                <div class="col-lg-6">
                    <!-- Blok pertama -->
                    <p class="text-muted small mb-4">◊ Warisan Kami</p>
                    <h2 class="fw-bold mb-4">
                        <span>Mentransformasi Kehidupan melalui Pendidikan Kristen untuk</span> <br>
                        <span class="text-primary">Lebih dari 30 Tahun</span>
                    </h2>
                    <p>
                        Di Sekolah Pelita Harapan (SPH), kami berkomitmen memberkati setiap keluarga yang memilih SPH
                        sebagai
                        rumah kedua mereka. Misi kami adalah menyediakan pendidikan internasional Kristen yang luar biasa,
                        yang
                        membekali dan menginspirasi siswa untuk memimpin dan melayani dalam setiap aspek kehidupan mereka,
                        di mana pun Tuhan memanggil mereka. Inti dari siapa kami adalah panggilan untuk melayani, dan kami
                        berdedikasi untuk mendukung pertumbuhan iman setiap siswa dalam perjalanan iman mereka.
                    </p>
                    <!-- Spacer biar ada jarak -->
                    <div class="my-5"></div>
                    <!-- Blok kedua -->
                    <h2 class="fw-bold mb-4">
                        <span>Warisan Keunggulan dalam <br> Pendidikan Internasional</span>
                    </h2>
                    <p>
                        Dengan pengalaman lebih dari 30 tahun, SPH telah memperoleh reputasi sebagai salah satu sekolah
                        internasional terkemuka di Indonesia. Sebagai pelopor pendidikan, SPH menjadi sekolah Kristen
                        internasional
                        pertama di Indonesia yang menawarkan ketiga program International Baccalaureate (IB).
                    </p>
                    <p>
                        Jaringan sekolah kami tersebar di lima lokasi utama di Jakarta dan sekitarnya, memberikan keluarga
                        akses ke pendidikan kelas dunia dalam lingkungan Kristen yang mendukung. Komitmen kami terhadap
                        pengembangan holistik memastikan bahwa siswa diberdayakan secara akademik, spiritual, dan sosial,
                        mempersiapkan mereka untuk sukses di dunia global yang selalu berubah.
                    </p>
                </div>
                <!-- Kanan: gambar sepanjang tinggi dua judul -->
                <div class="col-lg-6 position-relative">
                    <img src="{{ asset('images/sph-1.jpg') }}" alt="Gambar Warisan"
                        class="img-fluid position-absolute top-0 start-0 w-100"
                        style="object-fit: cover; border-radius: 8px;">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid  px-4 px-lg-5  position-relative">
            <div class="row">
                <h2 class="fw-bold mb-4">
                    <span>Mengadopsi Inovasi Teknologi dan Perspektif Global</span>
                </h2>
                <p>
                    Seiring pendidikan berkembang di abad ke-21, SPH tetap berada di garis depan dengan mengintegrasikan
                    teknologi dan perspektif global ke dalam kelas. Kami telah mengadopsi berbagai alat pembelajaran
                    inovatif,
                    termasuk platform digital mutakhir dan metode pengajaran interaktif, memastikan siswa dibekali
                    keterampilan
                    yang dibutuhkan untuk berkembang di dunia yang didorong oleh teknologi. Siswa kami mendapatkan manfaat
                    dari
                    kurikulum seimbang yang menggabungkan ketelitian akademik tradisional dan kemajuan teknologi terbaru.
                </p>
                <p>
                    Selain itu, SPH menyediakan banyak kesempatan bagi siswa untuk berpartisipasi dalam acara dan kompetisi
                    internasional, memungkinkan mereka memperluas wawasan dan mendapatkan pengalaman global. Pengalaman ini
                    membantu membentuk individu yang sadar budaya, adaptif, dan siap memberikan kontribusi di kancah dunia.
                </p>
            </div>
            <div class="my-5"></div>
            <div class="row">
                <h2 class="fw-bold mb-4">
                    <span>Komunitas yang Berkomitmen pada Pembelajaran Sepanjang Hayat</span>
                </h2>
                <p>
                    Di SPH, kami percaya bahwa pendidikan lebih dari sekadar pencapaian akademik; pendidikan adalah tentang
                    membentuk hati dan pikiran generasi berikutnya. Kami membangun komunitas pembelajar yang dinamis, di
                    mana
                    siswa, guru, dan orang tua bekerja sama untuk membangun fondasi yang kuat bagi masa depan. Komitmen kami
                    terhadap peningkatan berkelanjutan tercermin dalam kurikulum, kegiatan ekstrakurikuler, dan kemitraan
                    yang
                    kami kembangkan baik secara lokal maupun internasional.
                </p>
                <p>
                    Selama lebih dari tiga dekade, kami tetap setia pada misi kami: memproklamasikan keunggulan Kristus dan
                    terlibat dalam pemulihan segala sesuatu melalui pendidikan holistik. Misi ini membekali kami untuk
                    membina pemimpin berkarakter yang siap membuat perbedaan di dunia. Kami mengundang Anda untuk menjadi
                    bagian
                    dari perjalanan ini di SPH, di mana iman dan pendidikan bersatu untuk menciptakan dampak yang langgeng
                    bagi
                    kehidupan siswa kami dan masyarakat luas.
                </p>
            </div>
        </div>
    </section>
    <!-- Section terakhir: Full Image -->
    <section id="full-image" class="p-0 mt-5 mb-5"> <img src="{{ asset('images/sph-2.png') }}" alt="Full Width Image"
            class="img-fluid rounded w-100" style="display:block; object-fit:cover;">
    </section>
    @include('components.index_components.content_section')
    {{-- Parenting Quesstion Component --}}
    @include('components.pareting_question_component')
    <style>
        /* Default (HP) */
        #sph-numbers i {
            font-size: 3rem;
        }

        #sph-numbers h4 {
            font-size: 1.75rem;
        }

        /* Tablet */
        @media (min-width: 768px) {
            #sph-numbers i {
                font-size: 4rem;
            }

            #sph-numbers h4 {
                font-size: 2rem;
            }
        }

        /* Desktop */
        @media (min-width: 992px) {
            #sph-numbers i {
                font-size: 5rem;
            }

            #sph-numbers h4 {
                font-size: 2.5rem;
            }
        }

        /* Jarak vertikal antar kolom HP */
        @media (max-width: 767px) {
            #sph-numbers .row.gy-5>[class*="col-"] {
                margin-bottom: 1rem;
            }
        }

        #hero {
            position: relative;
            width: 100%;
            overflow: hidden;
            margin-top: 0;
            object-fit: cover;
            background-size: cover;
            /* bikin selalu nutup layar */
        }

        #hero .carousel-caption {
            bottom: 25%;
            /* lebih rendah, beri jarak aman */
            left: 50%;
            transform: translateX(-50%);
            /* center horizontal */
            width: 90%;
            /* agar tidak terlalu melebar */
            text-align: center;
            padding: 0 15px;
        }

        #hero .carousel-caption .btn {
            border-radius: 30px;
            /* tombol bulat */
            font-size: 0.9rem;
            /* teks lebih kecil */
            padding: 0.6rem 1.5rem;
            /* jarak dalam tombol */
        }

        /* Mobile */
        @media (max-width: 767px) {
            #hero .carousel-caption {
                bottom: 25%;
                /* beri jarak lebih ke atas dari tombol scroll */
                padding: 0 10px;
            }

            #hero .carousel-caption h2 {
                font-size: 1.8rem;
            }

            #hero .carousel-caption p {
                font-size: 1rem;
            }
        }

        #hero .carousel-caption h2,
        #hero .carousel-caption p {
            white-space: normal;
            /* wrap teks */
            word-break: break-word;
            /* pecah kata panjang */
        }

        .carousel-inner {
            overflow: visible;
        }

        /* Carousel */
        #hero .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.7);
        }

        #hero .carousel-item {
            height: 100vh;
            min-height: 400px;
            /* biar di HP tidak terlalu tipis */
            position: relative;
        }

        @media (max-width: 767px) {
            #hero .carousel-item {
                height: 70vh;
                /* lebih pas di HP */
            }
        }

        /* Caption responsif */
        #hero .carousel-caption h2 {
            font-size: 2rem;
            /* default kecil untuk HP */
        }

        #hero .carousel-caption p {
            font-size: 1rem;
        }

        @media (max-width: 767px) {
            #hero .carousel-caption h2 {
                font-size: 1.8rem;
            }

            #hero .carousel-caption p {
                font-size: 1rem;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #hero .carousel-caption h2 {
                font-size: 2.5rem;
            }

            #hero .carousel-caption p {
                font-size: 1.2rem;
            }
        }

        @media (min-width: 992px) {
            #hero .carousel-caption h2 {
                font-size: 3rem;
            }

            #hero .carousel-caption p {
                font-size: 1.25rem;
            }
        }

        /* Section Legacy: gambar kanan jadi responsif */
        #our-legacy .col-lg-6.position-relative img {
            position: relative !important;
            /* hilangkan absolute di HP */
            width: 100%;
            height: auto;

            border-radius: 8px;
            margin-top: 1.5rem;
            /* tambahin gap di HP */
        }

        @media (min-width: 992px) {
            #our-legacy .col-lg-6.position-relative img {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                object-fit: cover;
                border-radius: 8px;
                margin-top: 0;
                /* hilangin gap di desktop */
            }
        }

        /* Animasi muncul dari bawah */
        .animate-caption {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-in-out;
        }

        .carousel-item.active .animate-caption {
            opacity: 1;
            transform: translateY(0);
        }

        /* Tombol Scroll */
        .scroll-btn {
            position: absolute;
            right: 30px;
            bottom: 30px;
            background: rgba(255, 255, 255, 0.15);
            padding: 12px 18px;
            border-radius: 50px;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .scroll-btn:hover {
            background: rgba(255, 255, 255, 0.35);
            color: #fff;
        }

        .scroll-btn i {
            font-size: 1.2rem;
        }


    </style>
    <script>
        const heroCarousel = document.querySelector('#heroCarousel');
        const carousel = new bootstrap.Carousel(heroCarousel, {
            interval: 1000,
            ride: 'carousel',
            pause: false,
            touch: false,
            wrap: true
        });
        heroCarousel.addEventListener('slide.bs.carousel', function(e) {
            let captions = e.target.querySelectorAll('.animate-caption');
            captions.forEach(caption => {
                caption.style.opacity = "0";
                caption.style.transform = "translateY(40px)";
            });
        });
        heroCarousel.addEventListener('slid.bs.carousel', function(e) {
            let activeCaption = e.target.querySelector('.carousel-item.active .animate-caption');
            if (activeCaption) {
                activeCaption.style.opacity = "1";
                activeCaption.style.transform = "translateY(0)";
            }
        });
    </script>
    <style>
        /* Custom navbar style */
        .navbar-container .nav-link:hover,
        .navbar-container .nav-link:focus {
            color: rgba(255, 255, 255, 1) !important;
        }

        .navbar-container.scrolled .nav-link:hover,
        .navbar-container.scrolled .nav-link:focus {
            color: rgba(0, 0, 0, 1) !important;
        }
    </style>
@endsection
