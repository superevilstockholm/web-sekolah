@extends('App')
@section('title', 'Madrasah Ibtidaiyah')
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

    @include('components.lembaga_components.madrasah_ibtidaiyah_components.hero_section_component')
    @include('components.lembaga_components.madrasah_ibtidaiyah_components.keunggulan_section_component')
    @include('components.lembaga_components.madrasah_ibtidaiyah_components.carousel_section_component')

@endsection
