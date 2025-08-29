<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/tk', function () {
    return view('pages.jenjang.tk');
})->name('tk');

Route::get('/sd', function () {
    return view('pages.jenjang.sd');
})->name('sd');
