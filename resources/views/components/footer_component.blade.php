<footer class="bg-primary py-0 my-0">
    <div class="container py-5">
        <div class="row py-0 my-0">
            <div class="col-12 col-md-4 text-white mb-2 mb-md-0">
                <div class="dropdown">
                    <select class="form-select" id="branch-selector" aria-label="Pilih cabang">
                        <option value="pluit">Pluit Village</option>
                        <option value="lippo">Lippo Village</option>
                        <option value="sentul">Sentul City</option>
                        <option value="cikarang">Lippo Cikarang</option>
                        <option value="kemang">Kemang Village</option>
                    </select>
                </div>
                <div id="contact-info" class="mt-4">
                </div>
            </div>
            <div class="col-md-2 d-md-block d-none"></div>
            <hr class="d-block d-md-none text-white">
            <div class="col-12 col-md-6">
                <div class="row" style="font-size: 0.9rem;">
                    <div class="col-4 d-none d-md-block">
                        <ul class="list-unstyled d-flex flex-column gap-3">
                            <li><a class="nav-link text-white" href="#">Tujuan Kami</a></li>
                            <li><a class="nav-link text-white" href="#">Visi & Misi</a></li>
                            <li><a class="nav-link text-white" href="#">Karier</a></li>
                            <li><a class="nav-link text-white" href="#">Blogs</a></li>
                            <li><a class="nav-link text-white" href="#">Berita dan Acara</a></li>
                        </ul>
                    </div>
                    <div class="col-4 d-none d-md-block">
                        <ul class="list-unstyled d-flex flex-column gap-3">
                            <li><a class="nav-link text-white" href="#">Program</a></li>
                            <li><a class="nav-link text-white" href="#">Kurikulum</a></li>
                            <li><a class="nav-link text-white" href="#">jalur Pembelajaran</a></li>
                            <li><a class="nav-link text-white" href="#">Dukungan Pembelajaran</a></li>
                            <li><a class="nav-link text-white" href="#">Pembelajaran Pelayanan</a></li>
                        </ul>
                    </div>
                    <div class="col-4 d-none d-md-block">
                        <ul class="list-unstyled d-flex flex-column gap-3">
                            <li><a class="nav-link text-white" href="#">Hubungi Kami</a></li>
                            <li><a class="nav-link text-white" href="#">Tur Virtuak</a></li>
                            <li><a class="nav-link text-white" href="#">Daftar Sekarang</a></li>
                            <li><a class="nav-link text-white" href="#">Biaya Sekolah</a></li>
                            <li><a class="nav-link text-white" href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-6 d-block d-md-none">
                        <ul class="list-unstyled d-flex flex-column gap-3">
                            <li><a class="nav-link text-white" href="#">Tujuan Kami</a></li>
                            <li><a class="nav-link text-white" href="#">Hubungi Kami</a></li>
                            <li><a class="nav-link text-white" href="#">Kurikulum</a></li>
                            <li><a class="nav-link text-white" href="#">Karier</a></li>
                            <li><a class="nav-link text-white" href="#">Daftar Sekarang</a></li>
                            <li><a class="nav-link text-white" href="#">Dukungan Pembelajaran</a></li>
                            <li><a class="nav-link text-white" href="#">Berita dan Acara</a></li>
                            <li><a class="nav-link text-white" href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-6 d-block d-md-none">
                        <ul class="list-unstyled d-flex flex-column gap-3">
                            <li><a class="nav-link text-white" href="#">Program</a></li>
                            <li><a class="nav-link text-white" href="#">Visi & Misi</a></li>
                            <li><a class="nav-link text-white" href="#">Tur Virtual</a></li>
                            <li><a class="nav-link text-white" href="#">Jalur Pembelajaran</a></li>
                            <li><a class="nav-link text-white" href="#">Blogs</a></li>
                            <li><a class="nav-link text-white" href="#">Biaya Sekolah</a></li>
                            <li><a class="nav-link text-white" href="#">Pembelajaran Pelayanan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<style>
    .form-select {
        color: white;
        background-color: transparent;
        border: none;
        border-bottom: 2px solid white;
        border-radius: 0;
        padding-left: 0;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
    }
    .form-select:focus {
        box-shadow: none;
        border-color: #ffc107;
    }
    .form-select option {
        background-color: white;
        color: black;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const branchData = {
            lippo: {
                address: '2500 Bulevar Palem Raya Lippo Village, Tangerang 15810',
                phone1: '+62 21 546 0234',
                phone2: '+62 8821 546 0234',
                email: 'admission-lv@sph.ac.id',
                mapLink: 'https://goo.gl/maps/rpCFhm1yVkxKDP5o8'
            },
            sentul: {
                address: 'Jl. Babakan Madang, Sentul City, Bogor 16810',
                phone1: '+62 21 8796 0234',
                phone2: '+62 877 7857 7711',
                email: 'sph-sc@sph.ac.id',
                mapLink: 'https://goo.gl/maps/bKzxQFdWWbdxNwDW7'
            },
            cikarang: {
                address: 'Jl. Dago Permai No.1 Komp. Dago Villas Lippo Cikarang, Bekasi 17550',
                phone1: '+62 21 897 2786 / +62 21 897 2787',
                phone2: '+62 813 1122 4656',
                email: 'admission-lc@sph.ac.id',
                mapLink: 'https://goo.gl/maps/EUdJWZd9fggut2LZ9'
            },
            kemang: {
                address: 'Jl. Pangeran Antasari 36 Jakarta Selatan 12150',
                phone1: '+62 21 290 56 789',
                phone2: '+62 812 8368 2158',
                email: 'admission-kv@sph.ac.id',
                mapLink: 'https://goo.gl/maps/wZfLcczf3Hn4eayD9'
            },
            pluit: {
                address: 'Pluit Village, Jl. Pluit Indah Raya, Jakarta Utara 14450',
                phone1: '+62 21 6667 0315',
                phone2: '+62 817 1779 2557',
                email: 'sph-pv@sph.ac.id',
                mapLink: 'https://goo.gl/maps/8rjjfjVbhoSWc64n9'
            }
        };

        const branchSelector = document.getElementById('branch-selector');
        const contactInfoContainer = document.getElementById('contact-info');

        function updateContactInfo(branch) {
            const data = branchData[branch];
            if (!data) return;

            contactInfoContainer.innerHTML = `
            <div class="d-flex flex-row justify-content-between align-items-start mb-3" style="font-size: 0.9rem;">
                <!-- Alamat -->
                <div class="text-white me-2" style="max-width: 70%;">
                    ${data.address}
                </div>
                <!-- Sosmed -->
                <div class="d-flex flex-row align-items-center gap-2">
                    <a class="nav-link text-white"><i class="bi bi-youtube"></i></a>
                    <a class="nav-link text-white"><i class="bi bi-facebook"></i></a>
                    <a class="nav-link text-white"><i class="bi bi-instagram"></i></a>
                    <a class="nav-link text-white"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <!-- Kontak dibuat row/col -->
            <div class="row text-white" style="font-size: 0.9rem;">
                <div class="col-12 col-md-6 mb-2">
                    <i class="bi bi-telephone-fill me-2"></i>${data.phone1}
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <i class="bi bi-whatsapp me-2"></i>${data.phone2}
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <i class="bi bi-envelope-fill me-2"></i>${data.email}
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <i class="bi bi-geo-alt-fill me-2"></i>
                    <a href="${data.mapLink}" class="nav-link d-inline p-0 text-white">Lihat di google maps</a>
                </div>
            </div>
            `;
        }

        updateContactInfo(branchSelector.value);

        branchSelector.addEventListener('change', function() {
            updateContactInfo(this.value);
        });
    });
</script>
