<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProfileController;

// 1. Impor WelcomeController Anda
use App\Http\Controllers\WelcomeController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Di sini Anda mendaftarkan rute web untuk aplikasi Anda.
|
*/

// 2. Hanya gunakan SATU route untuk halaman utama, yang memanggil WelcomeController
Route::get('/', [WelcomeController::class, 'home'])->name('home');

// Route untuk dashboard yang sudah ada di auth.php, jadi ini bisa dihapus jika mau
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->middleware(['auth', 'verified', 'admin'])->name('admin.dashboard');

require __DIR__.'/auth.php';