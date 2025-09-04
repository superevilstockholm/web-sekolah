<section class="mb-4">
    <div class="container my-5">
        <div class="owl-carousel owl-theme">
            <!-- Card 1 -->
            <div class="item">
                <a href="#">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                        <img src="https://sph.edu/wp-content/uploads/2022/02/3H3A8368.jpg"
                             class="card-img" alt="Pendidikan Anak Usia Dini">
                        <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                            <h4 class="text-white m-0">Kurikulum Nasional</h4>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="item">
                <a href="#">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                        <img src="https://sph.edu/wp-content/uploads/2022/02/carousel-sph-academic-programs-cambridge-v1.jpg"
                             class="card-img" alt="Sekolah Dasar">
                        <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                            <h4 class="text-white m-0">Nilai-Nilai Qur’ani</h4>
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
        margin: 15,
        nav: false,
        dots: false,
        responsive: {
            0: { items: 1 },     // HP
            768: { items: 2 },   // Tablet
            992: { items: 2 }    // Laptop
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
    .owl-carousel .item .card {
        aspect-ratio: 4 / 5;
        overflow: hidden;
    }
    .owl-carousel .item .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
</style>
