@extends('App')
@section('title', 'Ekstrakurikuler')
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
                            Ekstrakurikuler
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    @include('components.kehidupan_siswa_components.ekstrakurikuler_components.hero_section_component')
    {{-- Kegiatan Ekstrakurikuler Section --}}
    @include('components.kehidupan_siswa_components.ekstrakurikuler_components.kegiatan_ekstrakurikuler_section_component')
    {{-- Kepemimpinan Siswa Section --}}
    @include('components.kehidupan_siswa_components.ekstrakurikuler_components.kepemimpinan_siswa_section_component')
    {{-- Klub dan Komunitas Section --}}
    @include('components.kehidupan_siswa_components.ekstrakurikuler_components.klub_dan_komunitas_section_component')
    {{-- Summer Program Section --}}
    @include('components.kehidupan_siswa_components.ekstrakurikuler_components.summer_program_section_component')
    {{-- Applied Science Academy Section --}}
    @include('components.kehidupan_siswa_components.ekstrakurikuler_components.applied_science_academy_section_component')
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
