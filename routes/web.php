<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrtuController;
use Illuminate\Routing\Route as RoutingRoute;
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

Auth::routes();
Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => 'guest'], function () {
    // register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

    // login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

//admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    // home admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

});

//guru
Route::middleware(['auth', 'user-access:guru'])->group(function () {
    // home guru
    Route::get('/guru', [GuruController::class, 'index'])->name('guru');

});

//ortu
Route::middleware(['auth', 'user-access:ortu'])->group(function () {
    // home ortu
    Route::get('/ortu', [OrtuController::class, 'index'])->name('ortu');

});