<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;

Route::get('/as', function () {
    return view('welcome');
});

//Punto 1
//El programa genera un número aleatorio del
//1 al 70. El usuario debe adivinarlo.Por cada intento,
//el programa le dice si el número es mayor o menor.
Route::get('frmAdivinar', [OperacionesController::class, 'frmAdivinar']);
Route::post('adivinar', [OperacionesController::class, 'adivinar'])->name('adivinar.procesar');

//Punto 2: 
//Ingresar un número del 1 al 10 y calcular
//su factorial. Ejemplo el factorial de 4 es: 1*2*3*4
Route::get('frmFactorial',[OperacionesController::class, 'frmFactorial']);
Route::post('factorial',[OperacionesController::class, 'factorial'])->name('factorial.procesar');

//Punto 3: 
//Pedir 5 notas (de 0 a 5) y verificar que
//sean válidas (dentro del rango).Mostrar promedio y si
//aprobó (promedio ≥ 3).
//Termina cuando acierta e imprime cuántos intentos usó.
Route::get('frmNotas', [OperacionesController::class, 'frmNotas']);
Route::post('notas', [OperacionesController::class, 'notas'])->name('notas.procesar');

//Punto 4: 
//Pide un número del 1 al 10 y muestra su
//tabla de multiplicar del 1 al 10.
//Si el número está fuera del rango, mostrar mensaje de error.
Route::get('frmMultiplicar', [OperacionesController::class, 'frmMultiplicar']);
Route::post('multiplicar', [OperacionesController::class, 'multiplicar'])->name('multiplicar.procesar');

//Punto 5: 
//Escribe un programa que genere 20 números
//aleatorios de 1 al 70, se pide hallar y mostrar por
//pantalla lo siguiente:
//a. Contar números impares múltiplos de 8.
//b. Promedio de los números pares.
//c. El número mayor múltiplo de 7.
//d. cuente cuantos números 6,11,17 se generaron.
Route::get('frm20Nums', [OperacionesController::class, 'frm20Nums']);
Route::post('20Nums', [OperacionesController::class, 'F20Nums'])->name('F20Nums.procesar');
