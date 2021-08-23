<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PembibitanController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\KelompokTaniController;
use App\Http\Controllers\HasilPanenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePembibitanController;
use App\Http\Controllers\HomePerawatanController;
use App\Http\Controllers\HomeArtikelController;
use App\Http\Controllers\HomeKelompokTaniController;
use App\Http\Controllers\HomeHasilPanenController;
use App\Http\Controllers\NotifikasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('berita', [HomeArtikelController::class, 'index'])->name('berita');
Route::get('beritaDetail/{id}', [HomeArtikelController::class, 'beritaDetail']);
Route::get('pembibitan', [HomePembibitanController::class, 'index'])->name('pembibitan');
Route::get('perawatan', [HomePerawatanController::class, 'index'])->name('perawatan');
Route::get('kelompokTani', [HomeKelompokTaniController::class, 'index'])->name('kelompokTani');
Route::get('kelompokTaniDetail/{id}', [KelompokTaniController::class, 'kelompokTaniDetail']);
Route::get('hasilPanen', [HomeHasilPanenController::class, 'index'])->name('hasilPanen');

Route::get('berita/cari', [HomeArtikelController::class, 'cari'])->name('beritacari');
Route::get('pembibitan/cari', [HomePembibitanController::class, 'cari'])->name('pembibitancari');
Route::get('perawatan/cari', [HomePerawatanController::class, 'cari'])->name('perawatancari');
Route::get('kelompokTani/cari', [HomeKelompokTaniController::class, 'cari'])->name('tanicari');

Route::get('tentang', function () {
    return view('home.tentang');
});
Route::get('kontak', function () {
    return view('home.kontak');
})->name('kontak');

Route::get('home', function () {
    return redirect()->route('dashboard.articles.index');
});

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('login', [LoginController::class, 'authenticate']);

Route::middleware(['auth'])->group(function () {

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::prefix('dashboard')->name('dashboard.')->group(function () {

        Route::resource('admin', 'AdminController');
        Route::resource('articles', ArticleController::class);
        Route::resource('pembibitans', PembibitanController::class);
        Route::resource('perawatans', PerawatanController::class);
        Route::resource('kelompok_tanis', KelompokTaniController::class);
        Route::resource('hasil_panens', HasilPanenController::class);
        Route::get('notifikasi', [NotifikasiController::class, 'index']);
        Route::resource('user', 'UserController');
    });
});

// Route::resource('articles', ArticleController::class);
