<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;



Route::name('home.')->prefix('home')->group(function () {
    Route::get('/',[DataController::class,'index'])->name('index');

});

Route::name('detail.')->prefix('detail')->group(function () {
    Route::get('/',[DataController::class,'produk'])->name('produk');
});

Route::name('shop.')->prefix('shop')->group(function () {

    Route::get('/', [DataController::class, 'shop'])->name('index');

    Route::get('/{id}', [DataController::class, 'detail'])->name('detail');
});

Route::name('login.')->prefix('login')->group(function () {
    Route::get('/',[UserController::class,'login'])->name('login');
});

Route::name('SignUp.')->prefix('SignUp')->group(function () {
    Route::get('/',[UserController::class,'SignUp'])->name('SignUp');
});

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

