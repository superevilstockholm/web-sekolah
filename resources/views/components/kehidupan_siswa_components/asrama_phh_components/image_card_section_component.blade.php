<section class="mt-3 mb-5">
    <div class="container py-4">
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://sph.edu/wp-content/uploads/2022/03/sph-phh-dorm-carousel-01.jpg"
                        alt="Testimonial" class="img-fluid w-100 rounded-4 shadow">
                </div>
                <div class="carousel-item">
                    <img src="https://sph.edu/wp-content/uploads/2022/03/sph-phh-dorm-carousel-02.jpg"
                        alt="Testimonial" class="img-fluid w-100 rounded-4 shadow">
                </div>
                <div class="carousel-item">
                    <img src="https://sph.edu/wp-content/uploads/2022/03/sph-phh-dorm-carousel-03.jpg"
                        alt="Testimonial" class="img-fluid w-100 rounded-4 shadow">
                </div>
                <div class="carousel-item">
                    <img src="https://sph.edu/wp-content/uploads/2022/03/sph-phh-dorm-carousel-04.jpg"
                        alt="Testimonial" class="img-fluid w-100 rounded-4 shadow">
                </div>
                <div class="carousel-item">
                    <img src="https://sph.edu/wp-content/uploads/2022/03/sph-phh-dorm-carousel-05.jpg"
                        alt="Testimonial" class="img-fluid w-100 rounded-4 shadow">
                </div>
            </div>
            <div class="d-flex justify-content-center gap-4 fs-1 mt-3">
                <div class="bg-transparent border-0" type="button"
                    data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </div>
                <div class="text-center mt-3" id="carouselIndicator">
                </div>
                <div class="bg-transparent border-0" type="button"
                    data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const parents = document.querySelectorAll(".parent");
        parents.forEach(parent => {
            const overlay = parent.querySelector(".overlay");
            overlay.classList.add("rounded-rt-4");
            const titleBox = parent.querySelector(".title-box");

            function syncSize() {
                const rect = titleBox.getBoundingClientRect();
                overlay.style.width = rect.width + "px";
                overlay.style.height = rect.height + "px";
            }
            syncSize();
            window.addEventListener("resize", syncSize);
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.querySelector('#testimonialCarousel');
        const indicatorsContainer = document.querySelector('#carouselIndicator');
        const items = carousel.querySelectorAll('.carousel-item');
        items.forEach((item, index) => {
            const span = document.createElement('span');
            span.textContent = ' _ ';
            span.dataset.index = index;
            span.style.cursor = 'pointer';
            span.classList.add('fs-2');
            span.style.opacity = '0.5';
            indicatorsContainer.appendChild(span);
        });

        function updateIndicator(activeIndex) {
            indicatorsContainer.querySelectorAll('span').forEach((span, i) => {
                if (i === activeIndex) {
                    span.classList.add('fw-bold');
                    span.style.opacity = '1';
                } else {
                    span.classList.remove('fw-bold');
                    span.style.opacity = '0.5';
                }
            });
        }
        updateIndicator(0);
        carousel.addEventListener('slide.bs.carousel', function(e) {
            updateIndicator(e.to);
        });
        indicatorsContainer.querySelectorAll('span').forEach(span => {
            span.addEventListener('click', function() {
                const index = parseInt(this.dataset.index);
                const bootstrapCarousel = bootstrap.Carousel.getInstance(carousel);
                bootstrapCarousel.to(index);
            });
        });
    });
</script>
