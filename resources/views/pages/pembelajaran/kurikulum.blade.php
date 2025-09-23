@extends('App')
@section('title', 'Kurikulum')
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
                            <a href="/pembelajaran">Pembelajaran</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Kurikulum
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    @include('components.pembelajaran_components.kurikulum_components.hero_section_component')
    {{-- Studi Alquran Section --}}
    @include('components.pembelajaran_components.kurikulum_components.studi_alquran_section_component')
    {{-- Bahasa Section --}}
    @include('components.pembelajaran_components.kurikulum_components.bahasa_section_component')
    {{-- Matematika Section --}}
    @include('components.pembelajaran_components.kurikulum_components.matematika_section_component')
    {{-- Sains Section --}}
    @include('components.pembelajaran_components.kurikulum_components.sains_section_component')
    {{-- Musik dan Seni Section --}}
    @include('components.pembelajaran_components.kurikulum_components.musik_dan_seni_section_component')
    {{-- Olahraga Section --}}
    @include('components.pembelajaran_components.kurikulum_components.olahraga_section_component')
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
