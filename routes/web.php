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
use App\Http\Controllers\KelolaController;
use App\Http\Controllers\KindergartenController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PembukaController;
use App\Http\Controllers\PenutupController;
use App\Http\Controllers\PlaygroupController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunController;
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
    Route::get('/kindergarten-catatan', [KindergartenController::class, 'catatan'])->name('kindergarten.catatan');

    // playgroup
    Route::get('/playgroup-arrival', [PlaygroupController::class, 'arrival'])->name('playgroup.arrival');
    Route::get('/playgroup-breakfast', [PlaygroupController::class, 'breakfast'])->name('playgroup.breakfast');
    Route::get('/playgroup-pembuka', [PlaygroupController::class, 'pembuka'])->name('playgroup.pembuka');
    Route::get('/playgroup-inti', [PlaygroupController::class, 'inti'])->name('playgroup.inti');
    Route::get('/playgroup-penutup', [PlaygroupController::class, 'penutup'])->name('playgroup.penutup');
    Route::get('/playgroup-catatan', [PlaygroupController::class, 'catatan'])->name('playgroup.catatan');

    // babycamp
    Route::get('/babycamp-breakfast', [BabycampController::class, 'breakfast'])->name('babycamp.breakfast');
    Route::get('/babycamp-pembuka', [BabycampController::class, 'pembuka'])->name('babycamp.pembuka');
    Route::get('/babycamp-inti', [BabycampController::class, 'inti'])->name('babycamp.inti');
    Route::get('/babycamp-penutup', [BabycampController::class, 'penutup'])->name('babycamp.penutup');
    Route::get('/babycamp-catatan', [BabycampController::class, 'catatan'])->name('babycamp.catatan');

    Route::post('/pembukababy', [PembukaController::class, 'storebaby'])->name('pembuka.storebaby');
    Route::post('/intibaby', [IntiController::class, 'storebaby'])->name('inti.storebaby');
    Route::post('/penutupbaby', [PenutupController::class, 'storebaby'])->name('penutup.storebaby');

    Route::delete('/pembuka', [PembukaController::class, 'destroybaby'])->name('pembuka.destroybaby');
    Route::delete('/inti', [IntiController::class, 'destroybaby'])->name('inti.destroybaby');
    Route::delete('/penutup', [PenutupController::class, 'destroybaby'])->name('penutup.destroybaby');

    // catatan guru
    Route::resource('catatanguru', CatatanGuruController::class);

    // isi
    Route::resource('breakfast', BreakfastController::class);
    Route::resource('pembuka', PembukaController::class);
    Route::resource('inti', IntiController::class);
    Route::resource('penutup', PenutupController::class);

    // indikator
    Route::resource('indikator', IndikatorController::class);

    Route::get('/kindergarten-indikator-pembuka', [IndikatorController::class, 'kindergartenpembuka'])->name('kindergarten.indikatorpembuka');
    Route::get('/kindergarten-indikator-inti', [IndikatorController::class, 'kindergarteninti'])->name('kindergarten.indikatorinti');

    Route::get('/playgroup-indikator-pembuka', [IndikatorController::class, 'playgrouppembuka'])->name('playgroup.indikatorpembuka');
    Route::get('/playgroup-indikator-inti', [IndikatorController::class, 'playgroupinti'])->name('playgroup.indikatorinti');

    // kelola
    Route::resource('kelola', KelolaController::class);
    Route::get('kelolakindergarten/{siswa}', [KindergartenController::class, 'show'])->name('kelolakindergarten.show');
    Route::get('kelolaplaygroup/{siswa}', [PlaygroupController::class, 'show'])->name('kelolaplaygroup.show');
    Route::get('kelolababycamp/{siswa}', [BabycampController::class, 'show'])->name('kelolababycamp.show');

    Route::get('/kelola-kindergarten', [KelolaController::class, 'kindergarten'])->name('kelola.kindergarten');
    Route::get('/kelola-playgroup', [KelolaController::class, 'playgroup'])->name('kelola.playgroup');
    Route::get('/kelola-babycamp', [KelolaController::class, 'babycamp'])->name('kelola.babycamp');
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
