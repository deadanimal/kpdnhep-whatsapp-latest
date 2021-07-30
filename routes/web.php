<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FailController;


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

Route::get('/', function () {
    return view('dashboard');
});

use App\Http\Controllers\PerbualanController;
Route::resource('perbualans', PerbualanController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

use App\Http\Controllers\TugasanController;
Route::resource('tugasans', TugasanController::class); 

use App\Http\Controllers\LaporanController;
Route::resource('laporans', LaporanController::class); 

Route::get('/testjap', function () {
    return view('testjap');
});

Route::resource('fails', FailController::class);

// custom action
Route::get('/tugasan_delete/{id}', [TugasanController::class, 'tugasan_delete']);

Route::get('/hantar/{id}', [TugasanController::class, 'hantar']);

Route::post('/semak/{id}', [TugasanController::class, 'semak']);

Route::get('/laporan_delete/{id}', [LaporanController::class, 'laporan_delete']);

Route::post('/simpan_muatnaik', [LaporanController::class, 'simpan_muatnaik']);

Route::post('/message', [PerbualanController::class, 'message']);
