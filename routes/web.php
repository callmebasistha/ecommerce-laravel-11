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
    Route::name('sliders.')->prefix('slider')->group(function () {
        Route ::get('',[SliderController::class,'index'])->name('list');
        Route ::get('add',[SliderController::class,'create'])->name('create');
        Route ::post('',[SliderController::class,'store'])->name('store');
        Route ::post('update',[SliderController::class,'store'])->name('update');
        Route ::post('delete',[SliderController::class,'store'])->name('delete');
    });
    Route::name('product.')->prefix('product')->group(function () {
        Route ::get('',[SliderController::class,'index'])->name('list');
        Route ::get('add',[SliderController::class,'create'])->name('create');
        Route ::post('',[SliderController::class,'store'])->name('store');
        Route ::post('update',[SliderController::class,'store'])->name('update');
        Route ::post('delete',[SliderController::class,'store'])->name('delete');
    });
    Route::name('brand.')->prefix('brand')->group(function () {
        Route ::get('',[SliderController::class,'index'])->name('list');
        Route ::get('add',[SliderController::class,'create'])->name('create');
        Route ::post('',[SliderController::class,'store'])->name('store');
        Route ::post('update',[SliderController::class,'store'])->name('update');
        Route ::post('delete',[SliderController::class,'store'])->name('delete');
    });
    Route::name('category.')->prefix('category')->group(function () {
        Route ::get('',[SliderController::class,'index'])->name('list');
        Route ::get('add',[SliderController::class,'create'])->name('create');
        Route ::post('',[SliderController::class,'store'])->name('store');
        Route ::post('update',[SliderController::class,'store'])->name('update');
        Route ::post('delete',[SliderController::class,'store'])->name('delete');
    });
    Route::name('coupons.')->prefix('product')->group(function () {
        Route ::get('',[SliderController::class,'index'])->name('list');
        Route ::get('add',[SliderController::class,'create'])->name('create');
        Route ::post('',[SliderController::class,'store'])->name('store');
        Route ::post('update',[SliderController::class,'store'])->name('update');
        Route ::post('delete',[SliderController::class,'store'])->name('delete');
    });
});

require __DIR__ . '/auth.php';
