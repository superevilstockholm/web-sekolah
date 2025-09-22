<?php

use Illuminate\Support\Facades\Route;

// Auth
use App\Http\Controllers\AuthController;

// Master Data
use App\Http\Controllers\MasterData\UserController;
use App\Http\Controllers\MasterData\PPDBController;

// Auth
Route::post('login', [AuthController::class, 'login']);

// Public Routes
Route::post('ppdb', [PPDBController::class, 'store']);

// Protected Routes
Route::middleware(['auth:sanctum'])->group(function () {
    // Master data
    Route::apiResource('users', UserController::class)->parameters([
        'users' => 'user'
    ]);
    Route::apiResource('ppdb', PPDBController::class)->parameters([
        'ppdb' => 'ppdb'
    ]);
});
