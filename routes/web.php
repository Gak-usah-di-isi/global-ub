<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDownloadCenterController;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/about', function () {
    return view('landing.about');
});

Route::get('/news', function () {
    return view('landing.news');
});

Route::get('/event', function () {
    return view('landing.event');
});

Route::get('/study', function () {
    return view('landing.study');
});


Route::get('/story', function () {
    return view('landing.stories');
});

Route::get('/testimonial', function () {
    return view('landing.testimonials');
});

Route::get('/detail-study', function () {
    return view('landing.detail-study');
});

Route::get('/detail-news', function () {
    return view('landing.detail-news');
});

Route::get('/detail-events', function () {
    return view('landing.detail-events');
});

Route::get('/download-center', function () {
    return view('landing.download-center');
});

Route::get('/gallery', function () {
    return view('landing.gallery');
});

Route::get('/partner', function () {
    return view('landing.partner');
});

Route::get('/partnership', function () {
    return view('landing.partnership');
});

Route::get('/innovations', function () {
    return view('landing.innovation');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/download-center', [AdminDownloadCenterController::class, 'index'])->name('download-center.index');
    Route::get('/download-center/create', [AdminDownloadCenterController::class, 'create'])->name('download-center.create');
    Route::post('/download-center', [AdminDownloadCenterController::class, 'store'])->name('download-center.store');
    Route::get('/download-center/{slug}/edit', [AdminDownloadCenterController::class, 'edit'])->name('download-center.edit');
    Route::put('/download-center/{slug}', [AdminDownloadCenterController::class, 'update'])->name('download-center.update');
    Route::delete('/download-center/{slug}', [AdminDownloadCenterController::class, 'destroy'])->name('download-center.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
