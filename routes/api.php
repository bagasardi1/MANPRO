<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\AdminAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Prefix otomatis: /api
| Middleware default: api
| Jadi endpoint akan seperti:
| - GET  /api/produk
| - POST /api/admin/login
|--------------------------------------------------------------------------
*/

// Public routes
Route::apiResource('produk', ProdukController::class)->only(['index', 'show']);
Route::apiResource('kategori', KategoriController::class)->only(['index', 'show']);

// Admin authentication routes
Route::post('/admin/login', [AdminAuthController::class, 'login']);

// Protected routes (require Sanctum auth)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/admin/logout', [AdminAuthController::class, 'logout']);
    Route::get('/admin/user', [AdminAuthController::class, 'user']);

    // Admin-only CRUD (optional, kalau nanti mau kelola dari dashboard admin)
    Route::apiResource('produk', ProdukController::class)->except(['index', 'show']);
    Route::apiResource('kategori', KategoriController::class)->except(['index', 'show']);
});
