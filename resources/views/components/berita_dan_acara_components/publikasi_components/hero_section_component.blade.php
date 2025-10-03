<section class="mt-3 mb-5 faq-section">
    <div class="container">
        <h1 class="faq-title text-center mb-5 py-2 text-black fw-normal">Publikasi</h1>
        <div class="row align-items-center" id="highlight-publication">
            <!-- Konten highlight akan di-inject lewat JS -->
        </div>
    </div>
</section>

<script>
async function fetchLatestPublication() {
    const res = await fetch('/api/publikasi?limit=1&page=1');
    const json = await res.json();
    return json.data.data[0]; // ambil publikasi terbaru
}

function renderHighlight(pub) {
    const container = document.getElementById("highlight-publication");
    container.innerHTML = `
        <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
            <img class="img-fluid rounded w-100"
                src="${pub.cover_url}"
                alt="${pub.title}"
                style="max-height: 400px; object-fit: cover; object-position: center;">
        </div>
        <div class="col-lg-1 d-none d-lg-block"></div>
        <div class="col-12 col-md-6 col-lg-4">
            <h4 class="faq-title fw-normal text-black mb-3">${pub.title}</h4>
            <p class="fw-normal text-black mb-3">The Light Edisi ke-44 2020</p>
            <a href="${pub.file_url}" target="_blank" class="btn btn-sm btn-warning text-white btn-custom px-4 rounded-pill">
                Baca Sekarang
            </a>
        </div>
        <div class="col-lg-1 d-none d-lg-block"></div>
    `;
}

// Render highlight publikasi terbaru
fetchLatestPublication().then(pub => {
    if(pub) renderHighlight(pub);
});
</script>
