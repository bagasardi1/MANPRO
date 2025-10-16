<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Disarankan untuk memindahkan logika welcome page
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\PesananController;
use App\Http\Controllers\Admin\PromoController;
use App\Http\Controllers\Customer\ProfilController;
use App\Http\Controllers\Customer\PesananSayaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KategoriController;


/*
|--------------------------------------------------------------------------
| Web Routes coba coba
|--------------------------------------------------------------------------
*/

// Halaman utama (Katalog Produk)
Route::get('/', [HomeController::class, 'index'])->name('home');


// --- RUTE UNTUK CUSTOMER YANG SUDAH LOGIN ---
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profil Customer
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::post('/profil/update', [ProfilController::class, 'update'])->name('profil.update');
    Route::post('/profil/update-password', [ProfilController::class, 'updatePassword'])->name('profil.updatePassword');

    // Pesanan Customer
    Route::get('/pesanan-saya', [PesananSayaController::class, 'index'])->name('pesanan-saya.index');
    Route::get('/pesanan-saya/{pesanan}', [PesananSayaController::class, 'show'])->name('pesanan-saya.show');
});


// --- SEMUA RUTE UNTUK ADMIN ---
Route::prefix('admin')->name('admin.')->group(function () {
    
    // Rute Login & Logout Admin (Bisa diakses tanpa login)
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    // Rute Admin yang Dilindungi (Hanya bisa diakses setelah login)
    Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('produk', ProdukController::class);
    Route::resource('pesanan', PesananController::class)->except(['create', 'store']);
    Route::resource('promo', PromoController::class);
    Route::resource('kategori', \App\Http\Controllers\Admin\KategoriController::class)->except(['show', 'edit', 'update']);
});


        
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::prefix('admin')->name('admin.')->middleware(['auth:admin'])->group(function () {
    Route::resource('kategori', KategoriController::class)->except(['show']);
});


        Route::resource('produk', ProdukController::class);
        Route::resource('pesanan', PesananController::class)->except(['create', 'store']);
        Route::resource('promo', PromoController::class);
    });
