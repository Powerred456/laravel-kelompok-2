<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController; // Tambahkan ini untuk menggunakan controller profil

// Halaman beranda langsung menampilkan halaman 'welcome'
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk autentikasi
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Rute yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rute untuk produk
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');

        // Rute untuk ekspor
        Route::get('export/excel', 'exportExcel')->name('products.exportExcel');
        Route::get('exportPDF', 'exportPDF')->name('products.exportPDF');
    });

    // Rute untuk profil pengguna
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

    // Menambahkan rute untuk mengupdate profil menggunakan metode POST
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});
