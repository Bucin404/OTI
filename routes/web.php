<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Existing routes
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('service');
});

Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/members', function () {
    return view('member');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

// Product routes (public)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Contact form submission
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin routes (protected by auth middleware)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/products', function () {
        return view('admin.products.index');
    })->name('products.index');
    
    Route::get('/products/create', function () {
        return view('admin.products.create');
    })->name('products.create');
    
    Route::get('/products/{product}/edit', function ($product) {
        return view('admin.products.edit', ['productId' => $product]);
    })->name('products.edit');
});

// Utility route
Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'Cache cleared!';
});
