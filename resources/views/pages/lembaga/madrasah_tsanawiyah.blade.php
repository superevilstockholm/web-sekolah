@extends('App')
@section('title', 'Madrasah tsanawiyah')
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
                            <a href="/lembaga">Lembaga</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Madrasah Ibtidaiyah
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    @include('components.lembaga_components.madrasah_tsanawiyah_components.hero_section_component')
    @include('components.lembaga_components.madrasah_tsanawiyah_components.keunggulan_section_component')
    @include('components.lembaga_components.madrasah_tsanawiyah_components.carousel_section_component')
    @include('components.lembaga_components.madrasah_tsanawiyah_components.komunitas_section_component')
    @include('components.lembaga_components.madrasah_tsanawiyah_components.faq_section_component')
    @include('components.lembaga_components.madrasah_ibtidaiyah_components.carousel_youtube_component')
    @include('components.pareting_question_component')

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
