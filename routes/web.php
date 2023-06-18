<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('user.signin');
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
Route::get('/product-details{id}', [ProductController::class, 'logisticdetails'])->where('id', '[0-9]+')->name('product.logisticdetails');
// Route::get('/product-update{id}', [ProductController::class, 'storeUpdate'])->where('id', '[0-9]+')->name('product.update');
Route::put('/logistic', [ProductController::class, 'update'])->where('id', '[0-9]+')->name('product.update');

// inbound
Route::get('/inbound', [ProductController:: class, 'inbound'])->name('product.inbound');
Route::post('/add', [ProductController::class, 'add'])->name('product.add');

// outbound
Route::get('/outbound', [ProductController:: class, 'outbound'])->name('product.outbound');
Route::post('/substract', [ProductController::class, 'substract'])->name('product.substract');

// delete
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

// edit
// Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.updatess');

// Route::get('/history', [ProductController::class, 'history'])->name('product.history');
Route::get('/History', [ProductController::class, 'history'])->name('product.history');
Route::get('/history', [ProductController::class, 'searchHistory'])->name('product.searchH');

Route::get('/report', [ProductController::class, 'report'])->name('product.report');
Route::get('/Report', [ProductController::class, 'searchReport'])->name('product.searchR');

// logout
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');


