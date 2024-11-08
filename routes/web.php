<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');
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
    Route::name('products.')->prefix('product')->group(function () {
        Route ::get('',[ProductController::class,'index'])->name('list');
        Route ::get('add',[ProductController::class,'create'])->name('create');
        Route ::get('edit',[ProductController::class,'edit'])->name('edit');
        Route ::post('',[ProductController::class,'store'])->name('store');
        Route ::post('delete',[ProductController::class,'destroy'])->name('delete');
    });

    Route::name('brand.')->group(function () {
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
    Route::name('coupons.')->group(function () {
        Route ::get('',[SliderController::class,'index'])->name('list');
        Route ::get('add',[SliderController::class,'create'])->name('create');
        Route ::post('',[SliderController::class,'store'])->name('store');
        Route ::post('update',[SliderController::class,'store'])->name('update');
        Route ::post('delete',[SliderController::class,'store'])->name('delete');
    });
});

require __DIR__ . '/auth.php';
