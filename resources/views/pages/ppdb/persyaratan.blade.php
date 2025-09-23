@extends('App')
@section('title', 'Persyaratan PPDB')
@section('content')
    {{-- Breadcrumb --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/ppdb">PPDB</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Persyaratan
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Persyaratan PPDB Section --}}
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-medium mb-2">Persyaratan Pendaftaran</h2>
                <p class="text-muted">Pastikan Anda memenuhi syarat berikut sebelum mendaftar:</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Membayar uang pendaftaran Rp. 350.000.</li>
                        <li class="list-group-item">Fotokopi Akta Kelahiran yang masih berlaku.</li>
                        <li class="list-group-item">Fotokopi Kartu Keluarga (KK).</li>
                        <li class="list-group-item">Ijazah atau SKHUN terakhir bagi yang pindahan/mutasi.</li>
                        <li class="list-group-item">Pas foto terbaru ukuran 3x4 sebanyak 3 lembar.</li>
                        <li class="list-group-item">Formulir pendaftaran yang telah diisi lengkap.</li>
                        <li class="list-group-item">Dokumen pendukung lainnya sesuai ketentuan sekolah.</li>
                    </ul>
                    <p class="text-muted mt-3 small">
                        <em>Catatan: Semua dokumen harus dibawa saat verifikasi pendaftaran di sekolah.</em>
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Parenting Quesstion Component --}}
    @include('components.pareting_question_component')
    {{-- Custom NavBar --}}
    <style>
        .navbar-container nav .nav-link,
        .navbar-container nav .navbar-brand {
            color: rgba(0, 0, 0, 0.75) !important;
            /* Teks hitam setelah scroll */
        }

        .navbar-container nav .nav-link:hover {
            color: rgba(0, 0, 0, 1) !important;
        }
    </style>
@endsection
