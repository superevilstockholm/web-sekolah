<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

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
