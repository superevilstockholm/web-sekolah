@extends('App')
@section('title', 'Kehidupan Rohani')
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
                            Kehidupan Rohani
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    @include('components.kehidupan_siswa_components.kehidupan_rohani_components.hero_section_component')
    {{-- Kebaktian Section --}}
    @include('components.kehidupan_siswa_components.kehidupan_rohani_components.kebaktian_section_component')
    {{-- Retret Rohani Section --}}
    @include('components.kehidupan_siswa_components.kehidupan_rohani_components.retreat_rohani_section_component')
    {{-- Pelayanan Pastoral Section --}}
    @include('components.kehidupan_siswa_components.kehidupan_rohani_components.pelayanan_pastoral_section_component')
    {{-- Koordinator Rohani Section --}}
    @include('components.kehidupan_siswa_components.kehidupan_rohani_components.koordinator_rohani_section_component')
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
