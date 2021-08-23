<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiArtikel;
use App\Http\Controllers\ApiAuth;
use App\Http\Controllers\ApiPembibitan;
use App\Http\Controllers\ApiPerawatan;
use App\Http\Controllers\ApiHasilPanen;
use App\Http\Controllers\ApiKelompokTani;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [ApiAuth::class, 'login']);
Route::post('register', [ApiAuth::class, 'register']);

Route::get('artikel', [ApiArtikel::class, 'index']);
Route::get('pembibitan', [ApiPembibitan::class, 'index']);
Route::get('perawatan', [ApiPerawatan::class, 'index']);
Route::get('kelompok-tani', [ApiKelompokTani::class, 'index']);
Route::get('hasil-panen', [ApiHasilPanen::class, 'index']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
