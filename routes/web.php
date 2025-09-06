<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('landing.index');
// });

// Route::get('/about', function () {
//     return view('landing.about');
// });

// Route::get('/news', function () {
//     return view('landing.news');
// });

// Route::get('/event', function () {
//     return view('landing.event');
// });

// Route::get('/study', function () {
//     return view('landing.study');
// });


// Route::get('/story', function () {
//     return view('landing.stories');
// });

// Route::get('/testimonial', function () {
//     return view('landing.testimonials');
// });

// Route::get('/detail-study', function () {
//     return view('landing.detail-study');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
