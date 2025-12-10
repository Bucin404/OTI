<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Routes
Route::get('/', function () {
    return view('modern-home');
});

Route::get('/about', function () {
    return view('modern-about');
});

Route::get('/services', function () {
    return view('modern-services');
});

Route::get('/contact', function () {
    return view('modern-contact');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Products Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

// SEO Routes
Route::get('/sitemap.xml', function() {
    $products = \App\Models\Product::select('slug', 'updated_at')->get();
    
    $content = '<?xml version="1.0" encoding="UTF-8"?>';
    $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    
    // Homepage
    $content .= '<url>';
    $content .= '<loc>' . url('/') . '</loc>';
    $content .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
    $content .= '<changefreq>daily</changefreq>';
    $content .= '<priority>1.0</priority>';
    $content .= '</url>';
    
    // Static pages
    $pages = ['about', 'services', 'contact', 'products'];
    foreach($pages as $page) {
        $content .= '<url>';
        $content .= '<loc>' . url('/' . $page) . '</loc>';
        $content .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
        $content .= '<changefreq>weekly</changefreq>';
        $content .= '<priority>0.8</priority>';
        $content .= '</url>';
    }
    
    // Products
    foreach($products as $product) {
        $content .= '<url>';
        $content .= '<loc>' . e(route('products.show', $product->slug)) . '</loc>';
        $content .= '<lastmod>' . $product->updated_at->toAtomString() . '</lastmod>';
        $content .= '<changefreq>monthly</changefreq>';
        $content .= '<priority>0.7</priority>';
        $content .= '</url>';
    }
    
    $content .= '</urlset>';
    
    return response($content, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

// Admin Routes
Route::prefix('admin')->group(function () {
    // Login routes (public)
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.post');
    
    // Protected admin routes
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        
        // Products management
        Route::get('/products', function() {
            return view('admin.products.index');
        })->name('admin.products.index');
        
        Route::get('/products/create', function() {
            return view('admin.products.create');
        })->name('admin.products.create');
        
        Route::get('/products/{id}/edit', function($id) {
            return view('admin.products.edit', ['productId' => $id]);
        })->name('admin.products.edit');
        
        // Contacts management
        Route::get('/contacts', function() {
            $contacts = \App\Models\Contact::orderBy('created_at', 'desc')->paginate(20);
            return view('admin.contacts.index', compact('contacts'));
        })->name('admin.contacts.index');
    });
});
