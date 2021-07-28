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
    return view('welcome');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

use App\Http\Controllers\TugasanController;
Route::resource('tugasans', TugasanController::class); 

Route::get('/report', function () {
    return view('report');
});

Route::get('/testjap', function () {
    return view('testjap');
});

Route::resource('fails', FailController::class);

// custom action
Route::get('/tugasan_delete/{id}', [TugasanController::class, 'tugasan_delete']);
