<section class="mt-3 mb-5 faq-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h5 class="text-primary d-flex align-items-center gap-2 mb-3" style="font-size: 0.9rem;">
                    <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" alt="">
                    Publikasi Al-Layyinah
                </h5>
                <h2 class="faq-title fw-normal text-black">The <span class="faq-title text-primary">Light</span></h2>
            </div>
        </div>
        <div class="row" id="publication-container"></div>
    </div>
</section>
<style>
    .card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        z-index: 1;
    }
    .card-overlay-0 {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
        opacity: 0.7;
        transition: opacity 0.3s ease-in-out;
        z-index: 1;
    }
    .card:hover .card-overlay {
        opacity: 1;
    }
    .card-title {
        position: absolute;
        bottom: 1rem;
        left: 50%;
        transform: translateX(-50%);
        z-index: 2;
    }
</style>
<script>
    const items = [{
        title: "The Light Ed. 1",
        cover: "https://sph.edu/wp-content/uploads/2022/01/Screenshot-2022-01-21-at-10.46.53-AM-min.png",
        url: "https://sph.edu/wp-content/uploads/2022/02/The-Light-Ed.-43.pdf"
    }, {
        title: "The Light Ed. 2",
        cover: "https://sph.edu/wp-content/uploads/2022/01/Screenshot-2022-01-21-at-10.46.43-AM-min.png",
        url: "https://sph.edu/wp-content/uploads/2022/02/The-Light-Ed.-42.pdf"
    }, {
        title: "The Light Ed. 3",
        cover: "https://sph.edu/wp-content/uploads/2022/01/Screenshot-2022-01-21-at-10.46.31-AM-min.png",
        url: "https://sph.edu/wp-content/uploads/2022/02/The-Light-Ed.-41.pdf"
    }, {
        title: "The Light Ed. 4",
        cover: "https://sph.edu/wp-content/uploads/2022/01/Screenshot-2022-01-21-at-10.46.21-AM-min.png",
        url: "https://sph.edu/wp-content/uploads/2022/02/The-Light-Ed.-40-1.pdf"
    }, {
        title: "The Light Ed. 5",
        cover: "https://sph.edu/wp-content/uploads/2022/01/Screenshot-2022-01-21-at-10.46.31-AM-min.png",
        url: "https://sph.edu/wp-content/uploads/2022/02/The-Light-Ed.-41.pdf"
    }, {
        title: "The Light Ed. 6",
        cover: "https://sph.edu/wp-content/uploads/2022/01/Screenshot-2022-01-21-at-10.46.53-AM-min.png",
        url: "https://sph.edu/wp-content/uploads/2022/02/The-Light-Ed.-43.pdf"
    }, {
        title: "The Light Ed. 7",
        cover: "https://sph.edu/wp-content/uploads/2022/01/Screenshot-2022-01-21-at-10.46.43-AM-min.png",
        url: "https://sph.edu/wp-content/uploads/2022/02/The-Light-Ed.-42.pdf"
    }, {
        title: "The Light Ed. 8",
        cover: "https://sph.edu/wp-content/uploads/2022/01/Screenshot-2022-01-21-at-10.46.31-AM-min.png",
        url: "https://sph.edu/wp-content/uploads/2022/02/The-Light-Ed.-41.pdf"
    }, {
        title: "The Light Ed. 9",
        cover: "https://sph.edu/wp-content/uploads/2022/01/Screenshot-2022-01-21-at-10.46.31-AM-min.png",
        url: "https://sph.edu/wp-content/uploads/2022/02/The-Light-Ed.-41.pdf"
    }, {
        title: "The Light Ed. 10",
        cover: "https://sph.edu/wp-content/uploads/2022/01/Screenshot-2022-01-21-at-10.46.21-AM-min.png",
        url: "https://sph.edu/wp-content/uploads/2022/02/The-Light-Ed.-40-1.pdf"
    }, ];
    const container = document.getElementById("publication-container");

    items.forEach(item => {
        const col = document.createElement("div");
        col.className = "col-md-4 col-12 mb-4";

        col.innerHTML = `
        <a href="${item.url}" target="_blank" class="text-decoration-none">
            <div class="card h-100 shadow-sm border-0 position-relative rounded overflow-hidden">
                <div class="ratio ratio-4x3">
                    <img src="${item.cover}" class="w-100 h-100 rounded"
                        style="object-fit: cover; object-position: center;"
                        alt="${item.title}">
                </div>
                <div class="card-overlay-0"></div>
                <div class="card-overlay"></div>
                <h4 class="card-title text-white text-center">${item.title}</h4>
            </div>
        </a>
        `;
        container.appendChild(col);
    });
</script>
