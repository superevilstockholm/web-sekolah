@extends('App')
@section('title', 'Pendaftaran PPDB')
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
                            <a href="/ppdb">PPDB</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Pendaftaran
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Form Section --}}
    <section class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="d-flex flex-column text-center mb-5">
                        <h1 class="fw-medium mb-2 pb-0">Pendaftaran <span class="text-primary">PPDB</span></h1>
                        <p class="text-muted">Silahkan isi form registrasi awal berikut ini:</p>
                    </div>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jenisPendaftaran" class="form-label text-muted">Jenis Pendaftaran</label>
                                <select class="form-select text-dark border-0 rounded-0 border-bottom" id="jenisPendaftaran" required>
                                    <option selected disabled>-- Pilih Jenis Pendaftaran --</option>
                                    <option>Peserta Didik Baru</option>
                                    <option>Mutasi</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="pendaftaranUnit" class="form-label text-muted">Pendaftaran Unit</label>
                                <select class="form-select text-dark border-0 rounded-0 border-bottom" id="pendaftaranUnit" required>
                                    <option selected disabled>-- Pilih Jenjang --</option>
                                    <option>TK</option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="namaPeserta" class="form-label text-muted">Nama Peserta Didik</label>
                            <input type="text" class="form-control border-0 rounded-0 border-bottom" id="namaPeserta" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jenisKelamin" class="form-label text-muted">Jenis Kelamin</label>
                                <select class="form-select text-dark border-0 rounded-0 border-bottom" id="jenisKelamin" required>
                                    <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="tempatLahir" class="form-label text-muted">Tempat Lahir</label>
                                <input type="text" class="form-control border-0 rounded-0 border-bottom" id="tempatLahir" placeholder="Masukkan tempat lahir"
                                    required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalLahir" class="form-label text-muted">Tanggal Lahir</label>
                            <input type="date" class="form-control text-dark border-0 rounded-0 border-bottom" id="tanggalLahir" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="noTelp" class="form-label text-muted">No Telp</label>
                                <input type="text" class="form-control border-0 rounded-0 border-bottom" id="noTelp" placeholder="Masukkan No Telp" required>
                            </div>
                            <div class="col-md-4">
                                <label for="noHp1" class="form-label text-muted">No Hp</label>
                                <input type="text" class="form-control border-0 rounded-0 border-bottom" id="noHp1" placeholder="Masukkan No Hp" required>
                            </div>
                            <div class="col-md-4">
                                <label for="noHp2" class="form-label text-muted">No Hp 2</label>
                                <input type="text" class="form-control border-0 rounded-0 border-bottom" id="noHp2" placeholder="Masukkan No Hp 2">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-muted">Email</label>
                            <input type="email" class="form-control border-0 rounded-0 border-bottom" id="email" placeholder="Masukkan email" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 px-4">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
