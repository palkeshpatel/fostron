<?php

use Illuminate\Support\Facades\Route;

// Fostron Company Website Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// Individual service pages
Route::get('/services/mobile-development', function () {
    return view('services.mobile-development');
})->name('services.mobile');

Route::get('/services/web-development', function () {
    return view('services.web-development');
})->name('services.web');

Route::get('/services/ai-solutions', function () {
    return view('services.ai-solutions');
})->name('services.ai');

Route::get('/services/cloud-solutions', function () {
    return view('services.cloud-solutions');
})->name('services.cloud');

// Additional Service Routes
Route::get('/services/blockchain-development', function () {
    return view('services.blockchain-development');
})->name('services.blockchain');

Route::get('/services/ui-ux-design', function () {
    return view('services.ui-ux-design');
})->name('services.design');

Route::get('/services/ar-vr-development', function () {
    return view('services.ar-vr-development');
})->name('services.ar-vr');

Route::get('/services/ecommerce-development', function () {
    return view('services.ecommerce-development');
})->name('services.ecommerce');

Route::get('/services/iot-development', function () {
    return view('services.iot-development');
})->name('services.iot');

Route::get('/services/cybersecurity', function () {
    return view('services.cybersecurity');
})->name('services.cybersecurity');

Route::get('/services/digital-marketing', function () {
    return view('services.digital-marketing');
})->name('services.marketing');

Route::get('/services/saas-development', function () {
    return view('services.saas-development');
})->name('services.saas');

// Clear route for clearing data
Route::get('/clear', function () {


    // Clear cache
    \Illuminate\Support\Facades\Cache::flush();

    // Clear config cache
    \Illuminate\Support\Facades\Artisan::call('config:clear');

    // Clear route cache
    \Illuminate\Support\Facades\Artisan::call('route:clear');

    // Clear view cache
    \Illuminate\Support\Facades\Artisan::call('view:clear');

    return response()->json([
        'success' => true,
        'message' => 'All data cleared successfully!'
    ]);
})->name('clear');
