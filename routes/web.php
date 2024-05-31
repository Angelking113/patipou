<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/mascotas', [PetController::class, 'index'])->name('mascotas');

Route::get('/servicios', [ServiceController::class, 'index'])->name('servicios');
Route::get('/productos', [ProductController::class, 'index'])->name('productos');
Route::get('/donaciones', [DonationController::class, 'index'])->name('donaciones');
Route::get('/nosotros', [AboutController::class, 'index'])->name('nosotros');