<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
| These routes are accessible by anyone visiting the site.
*/
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/harga', [LandingController::class, 'pricing'])->name('pricing');
Route::get('/portofolio', [LandingController::class, 'portfolio'])->name('portfolio');
Route::get('/jasa-sosial-media-management', [LandingController::class, 'socialMedia'])->name('social-media');
Route::get('/blog', [LandingController::class, 'blog'])->name('blog');
Route::get('/tentang-saya', function () {
    return view('about');
})->name('about');

/*
|--------------------------------------------------------------------------
| Admin & Protected Dashboard Routes
|--------------------------------------------------------------------------
| These routes require authentication and email verification (if enabled).
*/
Route::middleware(['auth', 'verified'])->group(function () {
    // Admin Dashboard (uses default Breeze name for authentication redirects)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin Group for Portfolio CRUD and settings
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('portfolios', PortfolioController::class);
    });
});

/*
|--------------------------------------------------------------------------
| Profile Management Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Authentication Routes (Laravel Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
