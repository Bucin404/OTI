<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Existing routes
Route::get('/', function () {
    return view('modern-home');
});

Route::get('/contact', function () {
    return view('modern-contact');
});

Route::get('/services', function () {
    return view('modern-services');
});

Route::get('/about', function () {
    return view('modern-about');
});

// Product routes (public)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

// Contact form submission
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Protected Admin Routes
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        Route::get('/products', function () {
            return view('admin.products.index');
        })->name('products.index');
        
        Route::get('/products/create', function () {
            return view('admin.products.create');
        })->name('products.create');
        
        Route::get('/products/{product}/edit', function ($product) {
            return view('admin.products.edit', ['productId' => $product]);
        })->name('products.edit');
        
        Route::get('/contacts', function () {
            return view('admin.contacts.index');
        })->name('contacts.index');
    });
});

// Utility route
Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'Cache cleared!';
});
