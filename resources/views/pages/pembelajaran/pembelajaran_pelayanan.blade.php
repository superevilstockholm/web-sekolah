@extends('App')
@section('title', 'Pembelajaran Pelayanan')
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
                            Pembelajaran Pelayanan
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    @include('components.pembelajaran_components.pembelajaran_pelayanan_components.hero_section_component')
    {{-- Mission Service Learning (MSL) Component --}}
    @include('components.pembelajaran_components.pembelajaran_pelayanan_components.mission_service_learning_section_component')
    {{-- Mitra Pelayanan --}}
    @include('components.pembelajaran_components.pembelajaran_pelayanan_components.mitra_pelayanan_section_component')
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
