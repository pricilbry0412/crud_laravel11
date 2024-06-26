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

Route::get('/mahasiswas',[MahasiswaController::class,'index'])
->name('mahasiswas.index');

Route::get('/mahasiswas/create',[MahasiswaController::class,'create'])
->name('mahasiswas.index');

Route::post('/mahasiswas',[MahasiswaController::class,'store'])
->name('mahasiswas.store');