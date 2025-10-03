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
                        <h1 class="mb-2 pb-0 text-black text-pt-sans">Pendaftaran <span class="text-primary text-pt-sans">PPDB</span></h1>
                        <p class="text-black text-pt-sans">Silahkan isi form registrasi awal berikut ini:</p>
                    </div>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jenisPendaftaran" class="form-label">Jenis Pendaftaran</label>
                                <select class="form-select text-dark border-0 rounded-0 border-bottom" id="jenisPendaftaran"
                                    required>
                                    <option selected disabled>-- Pilih Jenis Pendaftaran --</option>
                                    <option>Peserta Didik Baru</option>
                                    <option>Mutasi</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="pendaftaranUnit" class="form-label">Pendaftaran Unit</label>
                                <select class="form-select text-dark border-0 rounded-0 border-bottom" id="pendaftaranUnit"
                                    required>
                                    <option selected disabled>-- Pilih Jenjang --</option>
                                    <option>TK</option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="namaPeserta" class="form-label">Nama Peserta Didik</label>
                            <input type="text" class="form-control border-0 rounded-0 border-bottom" id="namaPeserta"
                                placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select text-dark border-0 rounded-0 border-bottom" id="jenisKelamin"
                                    required>
                                    <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control border-0 rounded-0 border-bottom" id="tempatLahir"
                                    placeholder="Masukkan tempat lahir" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control text-dark border-0 rounded-0 border-bottom"
                                id="tanggalLahir" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="noTelp" class="form-label">No Telp</label>
                                <input type="text" class="form-control border-0 rounded-0 border-bottom" id="noTelp"
                                    placeholder="Masukkan No Telp" required>
                            </div>
                            <div class="col-md-4">
                                <label for="noHp1" class="form-label">No Hp</label>
                                <input type="text" class="form-control border-0 rounded-0 border-bottom" id="noHp1"
                                    placeholder="Masukkan No Hp" required>
                            </div>
                            <div class="col-md-4">
                                <label for="noHp2" class="form-label">No Hp 2</label>
                                <input type="text" class="form-control border-0 rounded-0 border-bottom" id="noHp2"
                                    placeholder="Masukkan No Hp 2">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control border-0 rounded-0 border-bottom" id="email"
                                placeholder="Masukkan email" required>
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
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap');
        .text-pt-sans {
            font-family: 'PT Sans', sans-serif !important;
        }
        .navbar-container nav .nav-link,
        .navbar-container nav .navbar-brand {
            color: rgba(0, 0, 0, 0.75) !important;
            /* Teks hitam setelah scroll */
        }

        .navbar-container nav .nav-link:hover {
            color: rgba(0, 0, 0, 1) !important;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const data = {
                    jenis_pendaftaran: document.getElementById('jenisPendaftaran').value,
                    jenjang: document.getElementById('pendaftaranUnit').value,
                    nama_peserta_didik: document.getElementById('namaPeserta').value,
                    jenis_kelamin: document.getElementById('jenisKelamin').value,
                    tempat_lahir: document.getElementById('tempatLahir').value,
                    tanggal_lahir: document.getElementById('tanggalLahir').value,
                    no_telp: document.getElementById('noTelp').value,
                    no_hp: document.getElementById('noHp1').value,
                    no_hp2: document.getElementById('noHp2').value,
                    email: document.getElementById('email').value,
                };
                axios.post('/api/ppdb', data)
                    .then(response => {
                        if (response.data.status) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.data.message,
                                confirmButtonText: 'OK'
                            }).then(() => {
                                form.reset();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: error.response.data.error || error.response.data.message || 'Terjadi kesalahan',
                                confirmButtonText: 'OK'
                            });
                        }
                    })
                    .catch(error => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: error.response.data.error || error.response.data.message || 'Terjadi kesalahan',
                            confirmButtonText: 'OK'
                        });
                    });
            });
        });
    </script>
@endsection
