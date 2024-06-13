<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\GaleryImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// galery
Route::get('/galery/galery-detail/{galery}', [HomeController::class, 'galeryDetail'])->name('galery-detail');
Route::get('/galery-all', [HomeController::class, 'galery'])->name('galery');
Route::get('/galery-gabut', [HomeController::class, 'gabut'])->name('galery.gabut');
Route::get('/galery-malming', [HomeController::class, 'malming'])->name('galery.malming');
Route::get('/galery-spesial', [HomeController::class, 'spesial'])->name('galery.spesial');
Route::get('/galery-acara', [HomeController::class, 'acara'])->name('galery.acara');
Route::get('/galery-jalan', [HomeController::class, 'jalan'])->name('galery.jalan');
Route::get('/galery-liburan', [HomeController::class, 'liburan'])->name('galery.liburan');
Route::get('/galery-lainnya', [HomeController::class, 'lainnya'])->name('galery.lainnya');

// about
Route::get('/tentang', [HomeController::class, 'about'])->name('about');

Auth::routes();

// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');

//admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    // home admin
    Route::get('/admin-sahabat', [AdminController::class, 'index'])->name('admin')->middleware('auth');

    // change password
    Route::get('/password/change', [UserController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/password/change', [UserController::class, 'changePassword'])->name('password.update');

    // change profile
    Route::resource('user', AdminController::class);

    // galery
    Route::resource('galery', GaleryController::class);
    Route::get('galery/{galery}/image', [GaleryImageController::class, 'index'])->name('galery-image.index');
    Route::get('galery/{galery}/image/create', [GaleryImageController::class, 'create'])->name('galery-image.create');
    Route::post('galery/{galery}/image', [GaleryImageController::class, 'store'])->name('galery-image.store');
    Route::delete('galery/image/{image}/delete', [GaleryImageController::class, 'destroy'])->name('galery-image.destroy');

    // about
    Route::resource('about', AboutController::class);
});
