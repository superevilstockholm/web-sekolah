@extends('App')
@section('title', 'Jalur Pembelajaran')
@section('content')
{{-- Hero Section --}}
@include('components.pembelajaran_components.jalur_pembelajaran_components.hero_section_component')
{{-- Image Card Section --}}
@include('components.pembelajaran_components.jalur_pembelajaran_components.image_card_section_component')
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
