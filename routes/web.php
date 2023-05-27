<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('user.register');
});

//  register
Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/register', [UserController::class, 'store'])->name('user.store');
Route::get('/logistic', [UserController::class, 'logistic'])->name('user.logistic');

// sign in
Route::get('/signin', [UserController::class, 'signin'])->name('user.signin');
Route::post('/signin', [UserController::class, 'storeSignin'])->name('user.storeSignin');

// Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::get('/logistic', [ProductController::class, 'logistic'])->name('product.logistic');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

// Route::get('/product/search', [ProductController::class, 'search'])->name('product.search');