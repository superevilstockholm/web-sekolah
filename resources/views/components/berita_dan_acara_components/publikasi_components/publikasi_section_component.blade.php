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
        <div class="d-flex justify-content-center mt-3 gap-2" id="pagination"></div>
    </div>
</section>

<script>
    let currentPage = 1;

    async function fetchPublications(page = 1) {
        const res = await fetch(`/api/publikasi?limit=6&page=${page}`);
        const json = await res.json();
        return json.data;
    }

    function renderPublicationCard(pub) {
        const col = document.createElement("div");
        col.className = "col-md-4 col-12 mb-4";
        col.innerHTML = `
            <a href="${pub.file_url}" target="_blank" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0 position-relative rounded overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <img src="${pub.cover_url}" class="w-100 h-100 rounded"
                            style="object-fit: cover; object-position: center;"
                            alt="${pub.title}">
                    </div>
                    <div class="card-overlay"></div>
                    <h4 class="card-title">${pub.title}</h4>
                </div>
            </a>
        `;
        return col;
    }

    async function renderPublications(page = 1) {
        const container = document.getElementById("publication-container");
        const pagination = document.getElementById("pagination");
        container.innerHTML = "";
        pagination.innerHTML = "";

        const data = await fetchPublications(page);

        data.data.forEach(pub => {
            container.appendChild(renderPublicationCard(pub));
        });

        // Pagination
        const totalPages = data.last_page;

        function createButton(label, page, disabled = false, active = false) {
            const btn = document.createElement("button");
            btn.type = "button";
            btn.innerText = label;
            btn.disabled = disabled;
            btn.className = `btn btn-sm ${active ? "btn-primary" : "btn-outline-primary"}`;
            btn.onclick = () => {
                if (!disabled) {
                    currentPage = page;
                    renderPublications(currentPage);
                }
            };
            return btn;
        }

        // Prev
        pagination.appendChild(
            createButton("← Prev", currentPage - 1, currentPage === 1)
        );

        // Page numbers
        for (let i = 1; i <= totalPages; i++) {
            pagination.appendChild(createButton(i, i, false, i === currentPage));
        }

        // Next
        pagination.appendChild(
            createButton("Next →", currentPage + 1, currentPage === totalPages)
        );
    }

        // Initial render
    renderPublications(currentPage);
</script>
<style>
    .card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
        z-index: 1;
    }
    .card-title {
        position: absolute;
        bottom: 0.5rem;  /* di bawah */
        left: 0.5rem;    /* di kiri */
        z-index: 2;
        color: #fff;
        font-weight: 600;
        text-shadow: 0 2px 4px rgba(0,0,0,0.6); /* opsional biar lebih jelas */
    }
</style>
