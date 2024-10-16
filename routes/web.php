<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View; // Pastikan untuk mengimpor View

// Route ke homepage
Route::get('/', function (): View { // Ubah tipe pengembalian hanya ke View
    return view('homepage'); // Tidak perlu menyebut 'view:' di sini
});

// Route resource untuk product controller
Route::resource('/product', App\Http\Controllers\ProductController::class);
Route::resource('/iphone', App\Http\Controllers\IphoneController::class);
