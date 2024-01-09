<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dokter', [App\Http\Controllers\DokterController::class, 'index']);
Route::get('/dokter/create', [App\Http\Controllers\DokterController::class, 'create']);
Route::post('/dokter', [App\Http\Controllers\DokterController::class, 'store']);
Route::get('/dokter/edit/{id}', [App\Http\Controllers\DokterController::class, 'edit']);
Route::patch('/dokter/{id}', [App\Http\Controllers\DokterController::class, 'update']);
Route::delete('/dokter/{id}', [App\Http\Controllers\DokterController::class, 'destroy']);

Route::get('/obat', [App\Http\Controllers\ObatController::class, 'index']);
Route::get('/obat/create', [App\Http\Controllers\ObatController::class, 'create']);
Route::post('/obat', [App\Http\Controllers\ObatController::class, 'store']);
Route::get('/obat/edit/{id}', [App\Http\Controllers\ObatController::class, 'edit']);
Route::patch('/obat/{id}', [App\Http\Controllers\ObatController::class, 'update']);
Route::delete('/obat/{id}', [App\Http\Controllers\ObatController::class, 'destroy']);

Route::get('/pasien', [App\Http\Controllers\PasienController::class, 'index']);
Route::get('/pasien/create', [App\Http\Controllers\PasienController::class, 'create']);
Route::post('/pasien', [App\Http\Controllers\PasienController::class, 'store']);
Route::get('/pasien/edit/{id}', [App\Http\Controllers\PasienController::class, 'edit']);
Route::patch('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'update']);
Route::delete('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'destroy']);

Route::get('/rm', [App\Http\Controllers\Rekam_MedisController::class, 'index']);
Route::get('/rm/create', [App\Http\Controllers\Rekam_MedisController::class, 'create']);
Route::post('/rm', [App\Http\Controllers\Rekam_MedisController::class, 'store']);
Route::get('/rm/edit/{id}', [App\Http\Controllers\Rekam_MedisController::class, 'edit']);
Route::patch('/rm/{id}', [App\Http\Controllers\Rekam_MedisController::class, 'update']);
Route::delete('/rm/{id}', [App\Http\Controllers\Rekam_MedisController::class, 'destroy']);
Route::resource('rm', App\Http\Controllers\Rekam_MedisController::class);