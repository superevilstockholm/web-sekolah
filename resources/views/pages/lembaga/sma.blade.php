@extends('App')
@section('title', 'SMA Islam ')
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
                            Sma Islam
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
     {{-- Hero Section --}}
     @include('components.lembaga_components.sma_islam_components.hero_section_component')

     {{-- Keunggulan Section --}}
        @include('components.lembaga_components.sma_islam_components.keunggulan_section_component')

    {{-- Kampus yang Penuh Energi Section --}}
    @include('components.lembaga_components.sma_islam_components.penuh_energi_section_component')

    {{-- Carousel Section --}}
    @include('components.lembaga_components.sma_islam_components.carousel_section_component')

    {{-- Faq Section --}}
    @include('components.lembaga_components.sma_islam_components.faq_section_component')

    @include('components.pareting_question_component')

    <style>
        .navbar-container .nav-link,
        .navbar-container .navbar-brand {
            color: #000 !important;
            /* Teks hitam setelah scroll */
        }
    </style>
@endsection
