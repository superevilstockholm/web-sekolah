<div class="{{ request()->is('/') ? 'fixed-top' : 'sticky-top' }} navbar-container">
    <header class="{{ request()->is('/') ? '' : 'bg-primary' }} py-0 my-0" style="font-size: 0.9rem;">
        <div class="container my-0">
            <ul class="list-unstyled d-none d-md-flex justify-content-end gap-3 py-md-2"
                style="font-family: 'Roboto', sans-serif !important;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Berita dan Acara
                    </a>
                    <ul class="dropdown-menu rounded-0 border-0 shadow-sm p-3" style="font-size: 0.9rem;">
                        <li><a class="dropdown-item" href="{{ route('berita') }}">Berita</a></li>
                        <li><a class="dropdown-item" href="{{ route('acara') }}">Acara</a></li>
                        <li><a class="dropdown-item" href="{{ route('publikasi') }}">Publikasi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hubungi Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Bahasa
                    </a>
                    <ul class="dropdown-menu rounded-0 border-0 shadow-sm p-3" style="font-size: 0.9rem;">
                        <li><a class="dropdown-item" href="#">Indonesia</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg pt-0">
        <div class="container">

            <a class="navbar-brand fw-medium" href="/"><img style="height: 72px;"
                    src="{{ asset('static/img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav gap-lg-3">
                    <li class="nav-item d-md-none">
                        <div class="nav-link">
                            <button class="btn btn-primary rounded-pill" style="font-size: 0.9rem;">
                                Tanya Sekarang
                            </button>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu rounded-0 border-0 shadow-sm p-3">
                            <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                            <li><a class="dropdown-item" href="{{ route('visi_dan_misi') }}">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pembelajaran
                        </a>
                        <ul class="dropdown-menu rounded-0 border-0 shadow-sm p-3">
                            <li><a class="dropdown-item" href="{{ route('jalur_pembelajaran') }}">Jalur Pembelajaran</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('program') }}">Program</a></li>
                            <li><a class="dropdown-item" href="{{ route('kurikulum') }}">Kurikulum</a></li>
                            <li><a class="dropdown-item" href="{{ route('dukungan_pembelajaran') }}">Dukungan
                                    Pembelajaran</a></li>
                            <li><a class="dropdown-item" href="{{ route('pembelajaran_pelayanan') }}">Pembelajaran
                                    Pelayanan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Lembaga
                        </a>
                        <ul class="dropdown-menu rounded-0 border-0 shadow-sm p-3">

                            <li><a class="dropdown-item" href="{{ route('rauhatul_athfal') }}">Rauhatul Athfal</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('madrasah_ibtidaiyah') }}">Madrasah
                                    Ibtidaiyah</a></li>
                            <li><a class="dropdown-item" href="{{ route('madrasah_tsanawiyah') }}">Madrasah
                                    Tsanawiyah</a></li>
                            <li><a class="dropdown-item" href="{{ route('sma_islam') }}">Sekolah Menengah Atas
                                    Islam</a></li>
                            <li><a class="dropdown-item" href="{{ route('pondok_tahfidz') }}">Pondok Tahfidz Bayt
                                    Al-Qur’an</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kehidupan Siswa
                        </a>
                        <ul class="dropdown-menu rounded-0 border-0 shadow-sm p-3">
                            <li><a class="dropdown-item" href="{{ route('ekstreakurikuler') }}">Ekstrakurikuler</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('kehidupan_rohani') }}">Kehidupan Rohani</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('layanan_siswa') }}">Layanan Siswa</a></li>
                            <li><a class="dropdown-item" href="{{ route('asrama_phh') }}">Asrama PHH</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Jenjang
                        </a>
                        <ul class="dropdown-menu rounded-0 border-0 shadow-sm p-3">
                            <li><a class="dropdown-item" href="{{ route('tk') }}">TK</a></li>
                            <li><a class="dropdown-item" href="{{ route('sd') }}">SD</a></li>
                            <li><a class="dropdown-item" href="{{ route('smp') }}">SMP</a></li>
                            <li><a class="dropdown-item" href="{{ route('sma') }}">SMA</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            PPDB
                        </a>
                        <ul class="dropdown-menu rounded-0 border-0 shadow-sm p-3">
                            <li><a class="dropdown-item" href="{{ route('pendaftaran') }}">Pendaftaran</a></li>
                            <li><a class="dropdown-item" href="{{ route('persyaratan') }}">Persyaratan</a></li>
                        </ul>
                    </li>
                </ul>
                <hr class="d-md-none">
                <ul class="navbar-nav d-md-none">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Berita dan Acara
                        </a>
                        <ul class="dropdown-menu rounded-0 border-0 shadow-sm p-3">
                            <li><a class="dropdown-item" href="{{ route('berita') }}">Berita</a></li>
                            <li><a class="dropdown-item" href="{{ route('acara') }}">Acara</a></li>
                            <li><a class="dropdown-item" href="{{ route('publikasi') }}">Publikasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Bahasa
                        </a>
                        <ul class="dropdown-menu rounded-0 border-0 shadow-sm p-3">
                            <li><a class="dropdown-item" href="#">Indonesia</a></li>
                            <li><a class="dropdown-item" href="#">English</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="ms-lg-auto me-lg-0 d-none d-md-block">
                    <button class="btn btn-primary rounded-pill" style="font-size: 0.9rem;">
                        Tanya Sekarang
                    </button>
                </div>
            </div>
        </div>
    </nav>
</div>
{{-- Modal --}}
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top">
        <div class="modal-content border-0 shadow-lg rounded-3">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel">Cari</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control form-control-lg" placeholder="Ketik kata kunci...">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Cari</button>
            </div>
        </div>
    </div>
</div>
<style>
    .navbar-container {
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        background-color: transparent;
    }

    .navbar-container.scrolled {
        background-color: #fff !important;
    }

    .nav-link:focus,
    .nav-link.dropdown-toggle:focus,
    .navbar-toggler:focus {
        box-shadow: none !important;
        outline: none !important;
    }

    .dropdown-item:hover {
        background-color: var(--bs-body-bg) !important;
        color: rgba(var(--bs-primary-rgb), 1) !important;
    }

    /* Efek slide-in-up yang lebih smooth */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(12px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dropdown-menu .dropdown-item {
        opacity: 0;
        transform: translateY(12px);
    }

    .dropdown-menu.show .dropdown-item {
        animation: slideInUp 0.4s cubic-bezier(0.25, 1, 0.5, 1) forwards;
    }

    /* Animasi berurutan (staggered delay) */
    .dropdown-menu.show .dropdown-item:nth-child(1) {
        animation-delay: 0.05s;
    }

    .dropdown-menu.show .dropdown-item:nth-child(2) {
        animation-delay: 0.1s;
    }

    .dropdown-menu.show .dropdown-item:nth-child(3) {
        animation-delay: 0.15s;
    }

    .dropdown-menu.show .dropdown-item:nth-child(4) {
        animation-delay: 0.2s;
    }

    .dropdown-menu.show .dropdown-item:nth-child(5) {
        animation-delay: 0.25s;
    }

    /* Navbar default */
    .navbar-container {
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        background-color: transparent;
    }

    .navbar-container .nav-link,
    .navbar-container .navbar-brand,
    .navbar-container .btn {
        color: #fff;
        /* Teks putih sebelum scroll */
        transition: color 0.3s ease;
    }

    /* Navbar saat di scroll */
    .navbar-container .nav-link,
    .navbar-container .navbar-brand,
    .navbar-container .btn {
        color: rgba(255, 255, 255, 0.75);
        /* Teks putih sebelum scroll */
        transition: color 0.3s ease;
    }

    /* Navbar saat di scroll */
    .navbar-container.scrolled {
        background-color: #fff !important;
    }

    .navbar-container.scrolled nav .nav-link,
    .navbar-container.scrolled nav .navbar-brand {
        color: rgba(0, 0, 0, 0.75) !important;
        /* Teks hitam setelah scroll */
    }

    /* Tombol Tanya Sekarang saat scroll */
    .navbar-container.scrolled .btn-primary {
        color: #fff;
        /* tetap putih meski navbar putih */
        background-color: #0d6efd;
        /* atau bisa diganti warna lain jika mau */
    }

    .navbar-container.scrolled header .nav-link {
        color: rgba(255, 255, 255, 0.75);
    }

    .navbar-container header .nav-link:hover,
    .navbar-container header .nav-link:focus,
    .navbar-container.scrolled header .nav-link:hover,
    .navbar-container.scrolled header .nav-link:focus {
        color: #fff !important;
    }

    .navbar-container.scrolled header {
        background-color: var(--bs-primary) !important;
    }
</style>
<script>
    if (window.innerWidth >= 992) {
        document.querySelectorAll('.nav-item.dropdown').forEach(function(dropdown) {
            dropdown.addEventListener('mouseenter', function() {
                let menu = bootstrap.Dropdown.getOrCreateInstance(this.querySelector(
                    '.dropdown-toggle'));
                menu.show();
            });
            dropdown.addEventListener('mouseleave', function() {
                let menu = bootstrap.Dropdown.getOrCreateInstance(this.querySelector(
                    '.dropdown-toggle'));
                menu.hide();
            });
        });
    }
    document.addEventListener("scroll", function() {
        let navbar = document.querySelector(".navbar-container");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
    document.addEventListener("scroll", function() {
        let navbar = document.querySelector(".navbar-container");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
</script>
