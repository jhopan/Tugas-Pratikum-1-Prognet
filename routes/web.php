<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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
    
    // Routes untuk CRUD Posts
    Route::resource('posts', PostController::class);
    
    // Routes untuk CRUD Artikels
    Route::resource('artikels', ArtikelController::class);
    
    // Routes untuk CRUD Produks
    Route::resource('produks', ProdukController::class);
});

require __DIR__.'/auth.php';
