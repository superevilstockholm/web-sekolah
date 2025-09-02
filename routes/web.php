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

Route::group(['prefix' => 'jenjang'], function () {
    Route::get('/tk', function () {
        return view('pages.jenjang.tk');
    })->name('tk');

    Route::get('/sd', function () {
        return view('pages.jenjang.sd');
    })->name('sd');

    Route::get('/smp', function () {
        return view('pages.jenjang.smp');
    })->name('smp');

    Route::get('/sma', function () {
        return view('pages.jenjang.sma');
    })->name('sma');

    Route::get('/sd2', function () {
        return view('pages.jenjang.sd2');
    })->name('sd2');

    Route::get('/smp2', function () {
        return view('pages.jenjang.smp2');
    })->name('smp2');
});

Route::group(['prefix' => 'lembaga'], function () {

    Route::get('/sma-islam', function () {
        return view('pages.lembaga.sma');
    })->name('sma_islam');

    Route::get('/madrasah-ibtidaiyah', function () {
        return view('pages.lembaga.madrasah_ibtidaiyah');
    })->name('madrasah_ibtidaiyah');
});
