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
    let currentPage = 1;
    const limit = 6;

    async function fetchNews(page = 1) {
        try {
            const res = await fetch(`/api/news?limit=${limit}&page=${page}`);
            const json = await res.json();

            if (json.status) {
                renderNews(json.data.data);
                renderPagination(json.data);
            }
        } catch (err) {
            console.error("Gagal fetch news:", err);
        }
    }

    function renderNews(newsData) {
        const container = document.getElementById("news-container");
        container.innerHTML = "";
        newsData.forEach(news => {
            const col = document.createElement("div");
            col.className = "col-md-4 col-12 mb-3";
            col.innerHTML = `
                <a href="/berita/${news.slug}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm border-0 position-relative rounded">
                        <div class="ratio ratio-4x3">
                            <img src="${news.image_url}"
                                class="w-100 h-100 rounded"
                                style="object-fit: cover; object-position: center;"
                                alt="${news.title}">
                        </div>
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                            <span class="mb-1 text-uppercase text-light" style="font-size:0.7rem;">${news.category}</span>
                            <h6 class="card-title text-white mb-0">${news.title}</h6>
                        </div>
                    </div>
                </a>
            `;
            container.appendChild(col);
        });
    }

    function renderPagination(paginationData) {
        const pagination = document.getElementById("pagination");
        pagination.innerHTML = "";

        // Tombol Prev
        const prevBtn = document.createElement("button");
        prevBtn.className = "btn btn-sm btn-outline-primary";
        prevBtn.innerText = "← Prev";
        prevBtn.disabled = !paginationData.prev_page_url;
        prevBtn.onclick = () => fetchNews(paginationData.current_page - 1);
        pagination.appendChild(prevBtn);

        // Tombol angka (Laravel sudah kasih links di JSON)
        paginationData.links.forEach(link => {
            if (link.label.includes("Previous") || link.label.includes("Next")) return;
            const btn = document.createElement("button");
            btn.className = `btn btn-sm ${link.active ? "btn-primary" : "btn-outline-primary"}`;
            btn.innerHTML = link.label;
            btn.disabled = !link.url;
            btn.onclick = () => fetchNews(link.page);
            pagination.appendChild(btn);
        });

        // Tombol Next
        const nextBtn = document.createElement("button");
        nextBtn.className = "btn btn-sm btn-outline-primary";
        nextBtn.innerText = "Next →";
        nextBtn.disabled = !paginationData.next_page_url;
        nextBtn.onclick = () => fetchNews(paginationData.current_page + 1);
        pagination.appendChild(nextBtn);
    }

    // Render awal
    fetchNews(currentPage);
</script>
