<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\TimelineController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::redirect('/portofolio', '/#portfolio')->name('portfolio');

/*
|--------------------------------------------------------------------------
| Admin & Protected Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $portfolioCount = \App\Models\Portfolio::count();
        $timelineCount = \App\Models\Timeline::count();
        return view('dashboard', compact('portfolioCount', 'timelineCount'));
    })->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('portfolios', PortfolioController::class);
        Route::resource('timelines', TimelineController::class);
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
