@extends('App')
@section('title', 'Layanan Siswa')
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
                            <a href="/kehidupan-siswa">Kehidupan Siswa</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Layanan Siswa
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    @include('components.kehidupan_siswa_components.layanan_siswa_components.hero_section_section_component')
    {{-- Konseling Karier Section --}}
    @include('components.kehidupan_siswa_components.layanan_siswa_components.konseling_karier_section_component')
    {{-- Konseling Pribadi Section --}}
    @include('components.kehidupan_siswa_components.layanan_siswa_components.konseling_pribadi_section_component')
    {{-- Perpustakaan Section --}}
    @include('components.kehidupan_siswa_components.layanan_siswa_components.perpustakaan_section_component')
    {{-- Pusat Kesehatan Section --}}
    @include('components.kehidupan_siswa_components.layanan_siswa_components.pusat_kesehatan_section_component')
    {{-- Parenting Quesstion Component --}}
    @include('components.pareting_question_component')
    {{-- Custom NavBar --}}
    <style>
        .navbar-container .nav-link,
        .navbar-container .navbar-brand {
            color: #000 !important;
            /* Teks hitam setelah scroll */
        }
    </style>
@endsection
