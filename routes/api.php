<?php

use Illuminate\Support\Facades\Route;

// Auth
use App\Http\Controllers\AuthController;

// Master Data
use App\Http\Controllers\MasterData\UserController;
use App\Http\Controllers\MasterData\PPDBController;
use App\Http\Controllers\MasterData\NewsController;
use App\Http\Controllers\MasterData\EventController;
use App\Http\Controllers\MasterData\BlogsController;
use App\Http\Controllers\MasterData\PublicationController;

// Auth
Route::post('login', [AuthController::class, 'login']);

// Public Routes
Route::apiResource('news', NewsController::class)->parameters([
    'news' => 'news'
])->only(['index', 'show']);
Route::apiResource('events', EventController::class)->parameters([
    'events' => 'event'
])->only(['index', 'show']);
Route::apiResource('blogs', BlogsController::class)->parameters([
    'blogs' => 'blog'
])->only(['index', 'show']);
Route::apiResource('publikasi', PublicationController::class)->parameters([
    'publikasi' => 'publication'
])->only(['index', 'show']);
Route::post('ppdb', [PPDBController::class, 'store']);

// Protected Routes
Route::middleware(['auth:sanctum'])->group(function () {
    // upload image for ckeditor
    Route::post('news/upload-image', [NewsController::class, 'uploadImage']);
    Route::post('events/upload-image', [EventController::class, 'uploadImage']);
    Route::post('blogs/upload-image', [BlogsController::class, 'uploadImage']);
    // Master data
    Route::apiResource('users', UserController::class)->parameters([
        'users' => 'user'
    ]);
    Route::apiResource('ppdb', PPDBController::class)->parameters([
        'ppdb' => 'ppdb'
    ])->only(['index', 'show', 'update', 'destroy']);
    Route::apiResource('news', NewsController::class)->parameters([
        'news' => 'news'
    ])->only(['store', 'update', 'destroy']);
    Route::apiResource('events', EventController::class)->parameters([
        'events' => 'event'
    ])->only(['store', 'update', 'destroy']);
    Route::apiResource('blogs', BlogsController::class)->parameters([
        'blogs' => 'blog'
    ])->only(['store', 'update', 'destroy']);
    Route::apiResource('publikasi', PublicationController::class)->parameters([
        'publikasi' => 'publication'
    ])->only(['store', 'update', 'destroy']);
});
