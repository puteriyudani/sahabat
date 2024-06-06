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
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MorningController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PoopPeeController;
use App\Http\Controllers\PreschoolController;
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
Auth::routes();
Route::get('/', [HomeController::class, 'index']);
Route::get('/montessory-youtube', [HomeController::class, 'youtube'])->name('montessory.youtube');
Route::get('/montessory-pdf', [HomeController::class, 'pdf'])->name('montessory.pdf');

// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

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
Route::middleware(['auth', 'user-access:guru'])->group(function () {
    Route::get('/teacher', [GuruController::class, 'index'])->name('teacher.index');

    // KINDERGARTEN
    Route::get('/teacher-kindergarten', [GuruController::class, 'kindergarten'])->name('teacher.kindergarten');

    // kelola menu
    Route::resource('menu', MenuController::class);

    // kelola video
    Route::resource('video', VideosController::class);

    // kelola islamic
    Route::get('/islamic', function () {
        return view('guru.kelola.islamic.index');
    })->name('tkislamic.kelola');
    Route::resource('doa', DoaController::class);
    Route::resource('hadist', HadistController::class);
    Route::resource('quran', QuranController::class);

    // welcome mood
    Route::get('/teacher-kindergarten/welcome-mood', [WelcomeController::class, 'index'])->name('tkwelcome.index');
    Route::get('/teacher-kindergarten/welcome-mood/individu', [WelcomeController::class, 'individu'])->name('tkwelcome.individu');
    Route::get('/teacher-kindergarten/welcome-mood/create', [WelcomeController::class, 'create'])->name('tkwelcome.create');

    // morning booster
    Route::get('/teacher-kindergarten/morning-booster', [MorningController::class, 'index'])->name('tkmorning.index');
    Route::get('/teacher-kindergarten/morning-booster/individu', [MorningController::class, 'individu'])->name('tkmorning.individu');
    Route::get('/teacher-kindergarten/morning-booster/create', [MorningController::class, 'create'])->name('tkmorning.create');

    // breakfast
    Route::get('/teacher-kindergarten/breakfast', [BreakfastController::class, 'index'])->name('tkbreakfast.index');
    Route::get('/teacher-kindergarten/breakfast/individu', [BreakfastController::class, 'individu'])->name('tkbreakfast.individu');
    Route::get('/teacher-kindergarten/breakfast/create', [BreakfastController::class, 'create'])->name('tkbreakfast.create');

    // islamic base learning
    Route::get('/teacher-kindergarten/islamic-base-learning', [IslamicController::class, 'index'])->name('tkislamic.index');
    Route::get('/teacher-kindergarten/islamic-base-learning/individu', [IslamicController::class, 'individu'])->name('tkislamic.individu');
    Route::get('/teacher-kindergarten/islamic-base-learning/create', [IslamicController::class, 'create'])->name('tkislamic.create');

    // pre school
    Route::get('/teacher-kindergarten/preschool', [PreschoolController::class, 'index'])->name('tkpreschool.index');
    Route::get('/teacher-kindergarten/preschool/individu', [PreschoolController::class, 'individu'])->name('tkpreschool.individu');
    Route::get('/teacher-kindergarten/preschool/create', [PreschoolController::class, 'create'])->name('tkpreschool.create');

    // tematik
    Route::get('/teacher-kindergarten/tematik', [TematikController::class, 'index'])->name('tktematik.index');
    Route::get('/teacher-kindergarten/tematik/individu', [TematikController::class, 'individu'])->name('tktematik.individu');
    Route::get('/teacher-kindergarten/tematik/create', [TematikController::class, 'create'])->name('tktematik.create');

    // poop & pee
    Route::get('/teacher-kindergarten/pooppee', [PoopPeeController::class, 'index'])->name('tkpooppee.index');
    Route::get('/teacher-kindergarten/pooppee/individu', [PoopPeeController::class, 'individu'])->name('tkpooppee.individu');
    Route::get('/teacher-kindergarten/pooppee/create', [PoopPeeController::class, 'create'])->name('tkpooppee.create');

    // re calling
    Route::get('/teacher-kindergarten/recalling', [RecallingController::class, 'index'])->name('tkrecalling.index');
    Route::get('/teacher-kindergarten/recalling/individu', [RecallingController::class, 'individu'])->name('tkrecalling.individu');
    Route::get('/teacher-kindergarten/recalling/create', [RecallingController::class, 'create'])->name('tkrecalling.create');

    // PLAYGROUP
    Route::get('/teacher-playgroup', [GuruController::class, 'playgroup'])->name('teacher.playgroup');

    // BABYCAMP
    Route::get('/teacher-babycamp', [GuruController::class, 'babycamp'])->name('teacher.babycamp');
});

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
