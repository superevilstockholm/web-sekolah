@extends('App')
@section('title', 'Arama PHH')
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
                            Asrama PHH
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    @include('components.kehidupan_siswa_components.asrama_phh_components.hero_section_section_component')
    {{-- Fasilitas Section --}}
    @include('components.kehidupan_siswa_components.asrama_phh_components.fasilitas_section_component')
    {{-- Aktivitas Siswa Section --}}
    @include('components.kehidupan_siswa_components.asrama_phh_components.aktivitas_siswa_section_component')
    {{-- Image Card Section --}}
    @include('components.kehidupan_siswa_components.asrama_phh_components.image_card_section_component')
    {{-- FAQ Section --}}
    @include('components.kehidupan_siswa_components.asrama_phh_components.faq_section_component')
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
