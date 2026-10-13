<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PricingPackageController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TimelineController;
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
Route::get('/tentang-saya', [LandingController::class, 'about'])->name('about');

/*
|--------------------------------------------------------------------------
| Admin & Protected Dashboard Routes
|--------------------------------------------------------------------------
| These routes require authentication and email verification (if enabled).
*/
Route::middleware(['auth'])->group(function () {
    // Admin Dashboard (uses default Breeze name for authentication redirects)
    Route::get('/dashboard', function () {
        $portfolioCount = \App\Models\Portfolio::count();
        $packageCount = \App\Models\PricingPackage::count();
        $postCount = \App\Models\BlogPost::count();
        $serviceCount = \App\Models\Service::count();
        $timelineCount = \App\Models\Timeline::count();
        return view('dashboard', compact('portfolioCount', 'packageCount', 'postCount', 'serviceCount', 'timelineCount'));
    })->name('dashboard');

    // Admin Group for Portfolio, Package, Blog, Service and Timeline CRUD
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('portfolios', PortfolioController::class);
        Route::resource('packages', PricingPackageController::class);
        Route::resource('posts', BlogPostController::class);
        Route::resource('services', ServiceController::class);
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
