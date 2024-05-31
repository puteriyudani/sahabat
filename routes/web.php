<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BabycampController;
use App\Http\Controllers\BreakfastController;
use App\Http\Controllers\CatatanGuruController;
use App\Http\Controllers\CatatanOrangtuaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\IntiController;
use App\Http\Controllers\IslamicController;
use App\Http\Controllers\KelolaController;
use App\Http\Controllers\KindergartenController;
use App\Http\Controllers\MorningController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PembukaController;
use App\Http\Controllers\PenutupController;
use App\Http\Controllers\PlaygroupController;
use App\Http\Controllers\PoopPeeController;
use App\Http\Controllers\PreschoolController;
use App\Http\Controllers\RecallingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\TematikController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\YoutubeController;
use App\Models\Catatanorangtua;
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

// register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
//admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    // home admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    // akun
    Route::get('/list-akun', [AdminController::class, 'showAkun'])->name('showAkun');
    Route::get('akun/{user}', [AdminController::class, 'editAkun'])->name('editAkun');
    Route::put('akun/{user}', [AdminController::class, 'updateAkun'])->name('updateAkun');
    Route::delete('akun/{user}', [AdminController::class, 'destroyAkun'])->name('destroyAkun');
    Route::get('password/{user}', [PasswordController::class, 'edit'])->name('editPassword');
    Route::put('password/{user}', [PasswordController::class, 'update'])->name('updatePassword');



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
Route::get('/teacher', [GuruController::class, 'index'])->name('teacher.index');

Route::get('/teacher-kindergarten', [GuruController::class, 'kindergarten'])->name('teacher.kindergarten');

// welcome mood
Route::get('/teacher-kindergarten/welcome-mood', [WelcomeController::class, 'index'])->name('tkwelcome.index');
Route::get('/teacher-kindergarten/welcome-mood/individu', [WelcomeController::class, 'individu'])->name('tkwelcome.individu');
Route::get('/teacher-kindergarten/welcome-mood/create', [WelcomeController::class, 'create'])->name('tkwelcome.create');

// morning booster
Route::get('/teacher-kindergarten/morning-booster', [MorningController::class, 'index'])->name('tkmorning.index');
Route::get('/teacher-kindergarten/morning-booster/individu', [MorningController::class, 'individu'])->name('tkmorning.individu');

// breakfast
Route::get('/teacher-kindergarten/breakfast', [BreakfastController::class, 'index'])->name('tkbreakfast.index');
Route::get('/teacher-kindergarten/breakfast/individu', [BreakfastController::class, 'individu'])->name('tkbreakfast.individu');

// islamic base learning
Route::get('/teacher-kindergarten/islamic-base-learning', [IslamicController::class, 'index'])->name('tkislamic.index');
Route::get('/teacher-kindergarten/islamic-base-learning/individu', [IslamicController::class, 'individu'])->name('tkislamic.individu');

// pre school
Route::get('/teacher-kindergarten/preschool', [PreschoolController::class, 'index'])->name('tkpreschool.index');
Route::get('/teacher-kindergarten/preschool/individu', [PreschoolController::class, 'individu'])->name('tkpreschool.individu');

// tematik
Route::get('/teacher-kindergarten/tematik', [TematikController::class, 'index'])->name('tktematik.index');
Route::get('/teacher-kindergarten/tematik/individu', [TematikController::class, 'individu'])->name('tktematik.individu');

// poop & pee
Route::get('/teacher-kindergarten/pooppee', [PoopPeeController::class, 'index'])->name('tkpooppee.index');
Route::get('/teacher-kindergarten/pooppee/individu', [PoopPeeController::class, 'individu'])->name('tkpooppee.individu');

// today videos
Route::get('/teacher-kindergarten/today-videos', [VideosController::class, 'index'])->name('tkvideos.index');
Route::get('/teacher-kindergarten/today-videos/individu', [VideosController::class, 'individu'])->name('tkvideos.individu');

// re calling
Route::get('/teacher-kindergarten/recalling', [RecallingController::class, 'index'])->name('tkrecalling.index');
Route::get('/teacher-kindergarten/recalling/individu', [RecallingController::class, 'individu'])->name('tkrecalling.individu');

Route::get('/teacher-playgroup', [GuruController::class, 'playgroup'])->name('teacher.playgroup');
Route::get('/teacher-babycamp', [GuruController::class, 'babycamp'])->name('teacher.babycamp');


//ortu
Route::middleware(['auth', 'user-access:ortu'])->group(function () {
    Route::get('/halaman-orangtua', [OrtuController::class, 'index'])->name('ortu');
    Route::get('/halaman-orangtua-siswa', [OrtuController::class, 'siswa'])->name('ortu.siswa');

    Route::get('halaman-orangtua-siswa/{siswa}/kindergarten', [OrtuController::class, 'kindergarten'])->name('ortu.kindergarten');
    Route::get('halaman-orangtua-siswa/{siswa}/playgroup', [OrtuController::class, 'playgroup'])->name('ortu.playgroup');
    Route::get('halaman-orangtua-siswa/{siswa}/babycamp', [OrtuController::class, 'babycamp'])->name('ortu.babycamp');

    // catatan orangtua
    Route::resource('catatanorangtua', CatatanOrangtuaController::class);
    Route::get('catatan-orangtua/create/{siswa}/{tanggal}', [CatatanOrangtuaController::class, 'create'])->name('catatanorangtua.create');

    Route::get('/halaman-orangtua-test', [OrtuController::class, 'test'])->name('ortu.test');
});
