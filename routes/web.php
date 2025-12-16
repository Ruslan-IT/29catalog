<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/category/{id}', [ProductController::class, 'category'])->name('category.show');

Route::get('/product/{slug}', [ProductController::class, 'show'])
    ->name('product.show');

Route::get('/', [HomeController::class, 'index'])->name('pages');

Route::get('/contacts', [PageController::class, 'contacts'])
    ->name('contacts');

