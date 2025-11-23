<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;



Route::name('home.')->prefix('home')->group(function () {
    Route::get('/',[DataController::class,'index'])->name('index');

});

Route::get('/verify-otp/{email}', [AuthController::class, 'showVerifyForm'])
    ->name('verify.otp.form');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

Route::get('/produk/kategori/{slug}', [ProdukController::class, 'kategori'])
    ->name('produk.kategori');



Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'loginPost'])->name('admin.login.post');
Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/manageUsers', [AdminController::class, 'manage'])->name('admin.manage');
    Route::get('/manage', [AdminController::class, 'manageUsers'])->name('admin.user');

    Route::get('/product', [AdminController::class, 'product'])->name('admin.product');

    Route::delete('/manage/{id}/delete', [AdminController::class, 'deleteUser'])->name('admin.manage.delete');


    // route untuk submit form tambah produk
    Route::post('/product/store', [AdminController::class, 'storeProduct'])->name('admin.product.store');

    Route::get('/product/{id}/edit', [AdminController::class, 'edit'])->name('admin.product.edit');
    Route::put('/product/{id}', [AdminController::class, 'update'])->name('admin.product.update');
    Route::delete('/admin/product/{id}/delete', [AdminController::class, 'delete'])->name('admin.product.delete');

});


Route::get('/admin/users/{id}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');
Route::delete('/admin/users/{id}', [AdminController::class, 'destroy'])->name('admin.users.delete');

Route::prefix('profile')->group(function () {

    Route::get('/personal', [UserController::class, 'personal'])->name('profile-user.profile');
    Route::get('/wishlist', [UserController::class, 'wishlist'])->name('profile-user.wishlist');
    Route::get('/cart', [UserController::class, 'cart'])->name('profile-user.cart');
    Route::get('/history', [UserController::class, 'history'])->name('profile-user.history');
    Route::get('/address', [UserController::class, 'address'])->name('profile-user.address');
    Route::get('/payment', [UserController::class, 'payment'])->name('profile-user.payment');
    Route::get('/help', [UserController::class, 'help'])->name('profile-user.help');

    // Update data user
    Route::post('/update-name', [UserController::class, 'updateName'])->name('profile-user.update.name');
    Route::post('/update-birthday', [UserController::class, 'updateBirthday'])->name('profile-user.update.birthday');
    Route::post('/update-gender', [UserController::class, 'updateGender'])->name('profile-user.update.gender');
    Route::post('/update-email', [UserController::class, 'updateEmail'])->name('profile-user.update.email');
    Route::post('/update-phone', [UserController::class, 'updatePhone'])->name('profile-user.update.phone');

    Route::post('/cart/add', [UserController::class, 'addToCart'])->name('profile-user.cart.add');

    // ADDRESS CRUD
    Route::get('/address', [UserController::class, 'address'])->name('profile-user.address');

    Route::post('/address/store', [UserController::class, 'addressStore'])->name('profile-user.address.store');
    Route::put('/address/update/{id}', [UserController::class, 'addressUpdate'])->name('profile-user.address.update');
    Route::delete('/address/delete/{id}', [UserController::class, 'addressDelete'])->name('profile-user.address.delete');
});



// Halaman Shop
Route::get('/shop', [DataController::class, 'shop'])->name('shop');

// Halaman Detail Produk
Route::get('/shop/{id}', [DataController::class, 'detail'])->name('shop.detail');

// Checkout (POST)
Route::post('/checkout', [DataController::class, 'checkout'])->name('checkout');


Route::get('/checkout/{id}', [DataController::class, 'checkout'])->name('checkout');

Route::get('/success', [UserController::class, 'success'])
    ->name('success');




Route::get('/signup', fn() => view('user.SignUp'))->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');

Route::get('/login', fn() => view('user.login'))->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home',[DataController::class,'index'] , fn() => view('user.home' ))->middleware('auth')->name('home');



