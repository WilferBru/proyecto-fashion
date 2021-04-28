<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CapillaryDiagnosisController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth/login');
})->middleware('guest');

Route::get('/fbs-admin', [AdminController::class,'index'])->name('index.home')->middleware('auth');

Route::get('/Clientes', [ClientController::class,'index'])->name('index.client')->middleware('auth');

Route::get('/Crear-Clientes', [ClientController::class,'create'])->name('create.client')->middleware('auth');

Route::post('/Guardar-Clientes', [ClientController::class,'store'])->name('save.client')->middleware('auth');

Route::get('/Nuevo-Diagnostico-Capilar/{id}', [CapillaryDiagnosisController::class,'createDiagnosis'])->name('create.diagnosis')->middleware('auth');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
