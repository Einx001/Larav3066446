<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;

Route::get('/as', function () {
    return view('welcome');
});

Route::get('frmcuadratica', [OperacionesController::class, 'frmcuadratica']);
Route::post('cuadratica', [OperacionesController::class, 'cuadratica'])->name('cudratica.calcular');

//Punto 1

Route::get('frmAdivinar', [OperacionesController::class, 'frmAdivinar']);
Route::post("adivinar", [OperacionesController::class, 'adivinar'])->name('adivinar.procesar');
