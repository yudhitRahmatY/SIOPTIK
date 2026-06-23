<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

// Halaman Depan Premium yang kemarin kita buat
Route::get('/', function () {
    return view('welcome');
});

// Route untuk Fitur Manajemen Pasien
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');