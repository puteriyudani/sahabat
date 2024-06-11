<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BreakfastController;
use App\Http\Controllers\CatatanOrangtuaController;
use App\Http\Controllers\DoaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HadistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IslamicController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KindergartenController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MorningController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PoopPeeController;
use App\Http\Controllers\PreschoolController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\RecallingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\TematikController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\YoutubeController;
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
Route::get('/', function () {
    return view('home');
});
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
    Route::get('/admin-greenbell', [AdminController::class, 'index'])->name('admin');

    // kategori
    Route::resource('kategori', KategoriController::class);

    // product
    Route::get('product', [ProductController::class, 'index'])->name('product.index');
    Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('product', [ProductController::class, 'store'])->name('product.store');
    Route::get('product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
});
