<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'Cache cleared!';
});
