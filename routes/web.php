<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.landingpage');
})->name('homepage');

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::name('admin.')->group(function () {
        Route ::get('sliders',[SliderController::class,'index'])->name('sliders');
        Route ::get('add-sliders',[SliderController::class,'create'])->name('add-sliders');
    });
});

require __DIR__ . '/auth.php';
