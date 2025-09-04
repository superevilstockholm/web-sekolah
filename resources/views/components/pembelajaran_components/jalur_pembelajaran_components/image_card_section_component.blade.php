<section class="mb-4">
    <div class="container my-5">
        <div class="owl-carousel owl-theme">
            <!-- Card 1 -->
            <div class="item">
                <a href="#">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                        <img src="https://sph.edu/wp-content/uploads/2022/03/sph-learningpathway-carousel-early-years.jpg"
                             class="card-img" alt="Pendidikan Anak Usia Dini">
                        <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                            <h6 class="text-white m-0">Madrasah Ibtidaiyah (MI)</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="item">
                <a href="#">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                        <img src="https://sph.edu/wp-content/uploads/2022/03/sph-learningpathway-carousel-primary.jpg"
                             class="card-img" alt="Sekolah Dasar">
                        <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                            <h6 class="text-white m-0">Madrasah Tsanawiyah (MTs)</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="item">
                <a href="#">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                        <img src="https://sph.edu/wp-content/uploads/2022/03/sph-learningpathway-carousel-middle.jpg"
                             class="card-img" alt="Sekolah Menengah">
                        <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                            <h6 class="text-white m-0">Sekolah Menengah Atas (SMA)</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 7,
        nav: false,
        dots: false,
        responsive: {
            0: { items: 1 },     // HP
            768: { items: 2 },   // Tablet
            992: { items: 3 }    // Laptop
        }
    })
</script>
<style>
    .owl-carousel .item .card img {
        transition: transform 0.4s ease;
    }
    .owl-carousel .item:hover .card img {
        transform: scale(1.1);
    }
    .card-img-overlay {
        transition: background 0.4s ease;
    }
    .owl-carousel .item:hover .card-img-overlay {
        background: linear-gradient(to top, rgba(0,0,0,0.75), transparent) !important;
    }
</style>
