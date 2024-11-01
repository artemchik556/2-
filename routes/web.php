<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;

Route::get('/products', [ProductController::class, 'index']);

Route::post('/order/{product}', [OrderController::class, 'store'])->name('order.store');


Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/my-orders', [OrderController::class, 'myOrders'])->name('orders.my');

