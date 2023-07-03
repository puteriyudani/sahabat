<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BabycampController;
use App\Http\Controllers\BreakfastController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KindergartenController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PenutupController;
use App\Http\Controllers\PlaygroupController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\YoutubeController;
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
Route::get('/montessory-youtube', [HomeController::class, 'youtube'])->name('montessory.youtube');
Route::get('/montessory-pdf', [HomeController::class, 'pdf'])->name('montessory.pdf');

// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::group(['middleware' => 'guest'], function () {
    
// });

//admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    // home admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    // akun
    Route::get('/list-akun', [AdminController::class, 'showAkun'])->name('showAkun');
    Route::get('akun/{user}', [AdminController::class, 'editAkun'])->name('editAkun');
    Route::put('akun/{user}', [AdminController::class, 'updateAkun'])->name('updateAkun');
    Route::delete('akun/{user}', [AdminController::class, 'destroyAkun'])->name('destroyAkun');

    // register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

    // tahun
    Route::resource('tahun', TahunController::class);

    // siswa
    Route::resource('siswa', SiswaController::class);
    Route::get('/siswa-kindergarten', [SiswaController::class, 'showKindergarten'])->name('showKindergarten');
    Route::get('/siswa-playgroup', [SiswaController::class, 'showPlaygroup'])->name('showPlaygroup');
    Route::get('/siswa-babycamp', [SiswaController::class, 'showBabycamp'])->name('showBabycamp');

    // montessory
    Route::resource('youtube', YoutubeController::class);
    Route::resource('pdf', PdfController::class);
});

//guru
Route::middleware(['auth', 'user-access:guru'])->group(function () {
    // home guru
    Route::get('/halaman-guru', [GuruController::class, 'index'])->name('guru');
    Route::get('/kindergarten', [GuruController::class, 'kindergarten'])->name('kindergarten');
    Route::get('/playgroup', [GuruController::class, 'playgroup'])->name('playgroup');
    Route::get('/babycamp', [GuruController::class, 'babycamp'])->name('babycamp');
    Route::get('/kelola', [GuruController::class, 'kelola'])->name('kelola');

    // kindergarten
    Route::get('/kindergarten-arrival', [KindergartenController::class, 'arrival'])->name('kindergarten.arrival');
    Route::get('/kindergarten-breakfast', [KindergartenController::class, 'breakfast'])->name('kindergarten.breakfast');
    Route::get('/kindergarten-pembuka', [KindergartenController::class, 'pembuka'])->name('kindergarten.pembuka');
    Route::get('/kindergarten-inti', [KindergartenController::class, 'inti'])->name('kindergarten.inti');
    Route::get('/kindergarten-penutup', [KindergartenController::class, 'penutup'])->name('kindergarten.penutup');

    // playgroup
    Route::get('/playgroup-arrival', [PlaygroupController::class, 'arrival'])->name('playgroup.arrival');
    Route::get('/playgroup-breakfast', [PlaygroupController::class, 'breakfast'])->name('playgroup.breakfast');
    Route::get('/playgroup-pembuka', [PlaygroupController::class, 'pembuka'])->name('playgroup.pembuka');
    Route::get('/playgroup-inti', [PlaygroupController::class, 'inti'])->name('playgroup.inti');
    Route::get('/playgroup-penutup', [PlaygroupController::class, 'penutup'])->name('playgroup.penutup');

    // babycamp
    Route::get('/babycamp-breakfast', [BabycampController::class, 'breakfast'])->name('babycamp.breakfast');
    Route::get('/babycamp-pembuka', [BabycampController::class, 'pembuka'])->name('babycamp.pembuka');
    Route::get('/babycamp-inti', [BabycampController::class, 'inti'])->name('babycamp.inti');
    Route::get('/babycamp-penutup', [BabycampController::class, 'penutup'])->name('babycamp.penutup');

    // isi
    Route::post('/breakfast', [BreakfastController::class, 'store'])->name('breakfast.store');
    Route::post('/penutup', [PenutupController::class, 'store'])->name('penutup.store');
});

//ortu
Route::middleware(['auth', 'user-access:ortu'])->group(function () {
    // home ortu
    Route::get('/halaman-orangtua', [OrtuController::class, 'index'])->name('ortu');

});