<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', [PageController::class, 'about'])->name('pages.about');
Route::get('/profile', [PageController::class, 'profile'])->name('pages.profile');
Route::get('/faq', [PageController::class, 'faq'])->name('pages.faq');


Route::controller(ProductController::class)->group(function () {
    Route::get('products', 'index')->name('product.index');
    // Route::get('articles/create', 'create')->name('articles.create');
    // Route::post('articles', 'store')->name('articles.store');
    // Route::get('articles/{article}/edit', 'edit')->name('articles.edit');
    // Route::put('articles/{article}', 'update')->name('articles.update');
    Route::get('products/{product}', 'show')->name('product.show');
    // Route::delete('articles/{article}', 'destroy')->name('articles.destroy');
});
