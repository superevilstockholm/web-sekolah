<section class="mt-3 mb-5 faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                <h5 class="text-primary d-flex align-items-center gap-2 mb-3" style="font-size: 0.9rem;">
                    <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                        alt="">Berita Al-Layyinah
                </h5>
                <h3 class="faq-title text-black">Berita <span class="faq-title text-primary">Terbaru</span></h3>
            </div>
            <div class="col-lg-8 col-12">
                <div class="row" id="news-container"></div>
                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-3 gap-2" id="pagination"></div>
            </div>
        </div>
    </div>
</section>
<script>
    // Dummy data berita
    const newsData = [{
            title: "Berita 1",
            img: "https://sph.edu/wp-content/uploads/2025/04/SPH-KV-High-School-Musical-2025-800x628.png"
        },
        {
            title: "Berita 2",
            img: "https://sph.edu/wp-content/uploads/2024/12/SPH-KV-SABI-2024-1-800x628.png"
        },
        {
            title: "Berita 3",
            img: "https://sph.edu/wp-content/uploads/2024/11/SPH-KV-Lucs-Book-Debut-2024-1-800x628.png"
        },
        {
            title: "Berita 4",
            img: "https://sph.edu/wp-content/uploads/2024/11/SPH-KV-JAAC-2024-Winners-800x628.jpg"
        },
        {
            title: "Berita 5",
            img: "https://sph.edu/wp-content/uploads/2024/09/News-SPH-KV-Free-Medical-Checkup-1-800x628.png"
        },
        {
            title: "Berita 6",
            img: "https://sph.edu/wp-content/uploads/2024/05/News-KV-Achievement-News-Ms.-Jami-Zara-Featured-Image.png"
        },
        {
            title: "Berita 7",
            img: "https://sph.edu/wp-content/uploads/2024/04/News-KV-Achievement-News-Hillary-.png"
        },
        {
            title: "Berita 8",
            img: "https://sph.edu/wp-content/uploads/2024/02/Featured-Image-LC-Scholarship-Alumni-Testimonials.png"
        },
        {
            title: "Berita 9",
            img: "https://sph.edu/wp-content/uploads/2024/01/SPH-KV-News-Inspiring-Activities-Achievements.png"
        },
        {
            title: "Berita 10",
            img: "https://sph.edu/wp-content/uploads/2023/08/SPH-KV-Alumni-Story-Irene-Chung.png"
        },
        {
            title: "Berita 11",
            img: "https://sph.edu/wp-content/uploads/2022/09/Website-News-Blog-Featured-Image-1200-x-628.png"
        },
        {
            title: "Berita 12",
            img: "https://sph.edu/wp-content/uploads/2022/09/c2a19e75-514f-410e-a1be-ca1d3c4cf50f-1.jpeg"
        },
    ];
    let currentPage = 1;
    function getPerPage() {
        return 6;
    }
    function renderNews(page) {
        const container = document.getElementById("news-container");
        container.innerHTML = "";
        const perPage = getPerPage();
        const start = (page - 1) * perPage;
        const end = start + perPage;
        const paginatedNews = newsData.slice(start, end);
        paginatedNews.forEach(news => {
            const col = document.createElement("div");
            col.className = "col-md-4 col-12 mb-3";
            col.innerHTML = `
            <a href="/berita/${news.title.replace(/\s+/g, '-').toLowerCase()}"
               class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0 position-relative rounded">
                    <div class="ratio ratio-4x3">
                        <img src="${news.img}"
                            class="w-100 h-100 rounded"
                            style="object-fit: cover; object-position: center;"
                            alt="${news.title}">
                    </div>
                    <div class="card-img-overlay d-flex align-items-end p-2"
                        style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                        <h6 class="card-title text-white mb-0">${news.title}</h6>
                    </div>
                </div>
            </a>
        `;
            container.appendChild(col);
        });
        renderPagination();
    }
    function renderPagination() {
        const perPage = getPerPage();
        const totalPages = Math.ceil(newsData.length / perPage);
        const pagination = document.getElementById("pagination");
        pagination.innerHTML = "";
        function createButton(label, page, disabled = false, active = false) {
            const btn = document.createElement("button");
            btn.type = "button";
            btn.innerText = label;
            btn.disabled = disabled;
            btn.className = `btn btn-sm ${active ? "btn-primary" : "btn-outline-primary"}`;
            btn.onclick = function() {
                if (!disabled) {
                    currentPage = page;
                    renderNews(currentPage);
                }
            };
            return btn;
        }
        // Tombol Prev
        pagination.appendChild(
            createButton("← Prev", currentPage - 1, currentPage === 1)
        );
        // Logic angka halaman
        let pages = [];
        if (totalPages <= 5) {
            // Kalau total halaman sedikit tampilkan semua
            for (let i = 1; i <= totalPages; i++) pages.push(i);
        } else {
            if (currentPage <= 3) {
                pages = [1, 2, 3, "...", totalPages];
            } else if (currentPage >= totalPages - 2) {
                pages = [1, "...", totalPages - 2, totalPages - 1, totalPages];
            } else {
                pages = [1, "...", currentPage, "...", totalPages];
            }
        }
        // Render tombol angka
        pages.forEach(p => {
            if (p === "...") {
                const span = document.createElement("span");
                span.innerText = "...";
                span.className = "btn btn-sm btn-light disabled";
                pagination.appendChild(span);
            } else {
                pagination.appendChild(
                    createButton(p, p, false, p === currentPage)
                );
            }
        });
        // Tombol Next
        pagination.appendChild(
            createButton("Next →", currentPage + 1, currentPage === totalPages)
        );
    }
    // Render awal
    renderNews(currentPage);
    // Re-render saat resize (supaya perPage berubah otomatis)
    window.addEventListener("resize", () => {
        renderNews(currentPage);
    });
</script>
