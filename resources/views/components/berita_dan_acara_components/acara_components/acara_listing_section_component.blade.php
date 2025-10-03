<section class="mt-3 mb-5 faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                <h5 class="text-primary d-flex align-items-center gap-2 mb-3" style="font-size: 0.9rem;">
                    <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                        alt="">Acara Al-Layyinah
                </h5>
                <h3 class="faq-title text-black"><span class="faq-title text-primary">Acara</span> Masa Lalu</h3>
            </div>
            <div class="col-lg-8 col-12">
                <div class="row" id="acara-container"></div>
                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-3 gap-2" id="pagination"></div>
            </div>
        </div>
    </div>
</section>

<script>
let currentPage = 1;
const perPage = 6; // jumlah item per page

async function fetchAcara(page = 1) {
    try {
        const res = await fetch(`/api/events?limit=${perPage}&page=${page}`);
        const json = await res.json();
        if (!json.status) throw new Error(json.message || 'Error fetching events');

        return json.data; // sesuai response API
    } catch (err) {
        console.error(err);
        return null;
    }
}

async function renderAcara(page = 1) {
    const container = document.getElementById("acara-container");
    const pagination = document.getElementById("pagination");
    container.innerHTML = "Loading...";
    pagination.innerHTML = "";

    const data = await fetchAcara(page);
    if (!data) {
        container.innerHTML = "<p class='text-danger'>Gagal memuat acara</p>";
        return;
    }

    container.innerHTML = "";
    data.data.forEach(acara => {
        const col = document.createElement("div");
        col.className = "col-md-4 col-12 mb-3";
        col.innerHTML = `
            <a href="/acara/${acara.slug}" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0 position-relative rounded">
                    <div class="ratio ratio-4x3">
                        <img src="${acara.image_url}"
                            class="w-100 h-100 rounded"
                            style="object-fit: cover; object-position: center;"
                            alt="${acara.title}">
                    </div>
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                        style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                        <span class="mb-1 text-uppercase text-light" style="font-size:0.7rem;">${acara.category}</span>
                        <h6 class="card-title text-white mb-0">${acara.title}</h6>
                    </div>
                </div>
            </a>
        `;
        container.appendChild(col);
    });

    renderPagination(data);
}

function renderPagination(data) {
    const pagination = document.getElementById("pagination");
    pagination.innerHTML = "";

    function createButton(label, page, disabled = false, active = false) {
        const btn = document.createElement("button");
        btn.type = "button";
        btn.innerText = label;
        btn.disabled = disabled;
        btn.className = `btn btn-sm ${active ? "btn-primary" : "btn-outline-primary"}`;
        btn.onclick = () => {
            if (!disabled) {
                currentPage = page;
                renderAcara(currentPage);
            }
        };
        return btn;
    }

    // Prev
    pagination.appendChild(
        createButton("← Prev", currentPage - 1, !data.prev_page_url)
    );

    // Angka halaman
    for (let i = 1; i <= data.last_page; i++) {
        pagination.appendChild(
            createButton(i, i, false, i === currentPage)
        );
    }

    // Next
    pagination.appendChild(
        createButton("Next →", currentPage + 1, !data.next_page_url)
    );
}

// Render awal
renderAcara(currentPage);
</script>
