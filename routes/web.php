<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::prefix('pembelajaran')->group(function() {
    // Jalur Pembelajaran
    Route::get('jalur-pembelajaran', function () {
        return view('pages.pembelajaran.jalur_pembelajaran');
    })->name('jalur_pembelajaran');
    // Program
    Route::get('program', function () {
        return view('pages.pembelajaran.program');
    })->name('program');
    // Kurikulum
    Route::get('kurikulum', function () {
        return view('pages.pembelajaran.kurikulum');
    })->name('kurikulum');
    // Dukungan Pembelajaran
    Route::get('dukungan-pembelajaran', function () {
        return view('pages.pembelajaran.dukungan_pembelajaran');
    })->name('dukungan_pembelajaran');
    // Pembelajaran Pelayanan
    Route::get('pembelajaran-pelayanan', function () {
        return view('pages.pembelajaran.pembelajaran_pelayanan');
    })->name('pembelajaran_pelayanan');
})->name('pembelajaran');

Route::prefix('kehidupan-siswa')->group(function () {
    // Ekstrakurikuler
    Route::get('ekstreakurikuler', function () {
        return view('pages.kehidupan_siswa.ekstreakurikuler');
    })->name('ekstreakurikuler');
})->name('kehidupan_siswa');
