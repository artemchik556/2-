<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/products', [ProductController::class, 'index']);

Route::post('/order/{product}', [OrderController::class, 'store'])->name('order.store');


Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
