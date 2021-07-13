<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;

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

/*
Route::get('productos',[ProductoController::class,'index'])->name('productos.index'); //indexProductos.blade.php
Route::get('productos/create',[ProductoController::class,'create'])->name('productos.create'); //creteProductos.blade.php
Route::get('productos/{id}',[ProductoController::class,'show'])->name('productos.show'); //showProductos.blade.php
Route::get('productos/{id}/edit',[ProductoController::class,'edit'])->name('productos.edit'); //editProductos.blade.php
Route::post('productos',[ProductoController::class,'store'])->name('productos.store'); // No tiene view
Route::put('productos/{id}',[ProductoController::class,'update'])->name('productos.update'); // No tiene view
Route::delete('productos/{id}',[ProductoController::class,'destroy'])->name('productos.destroy'); // Se incluye en showProductos.blade.php
*/

//Estudiantes
Route::get('estudiantes',[EstudianteController::class,'index'])->name('estudiantes.index'); //Tabla
Route::get('estudiantes/create',[EstudianteController::class,'create'])->name('estudiantes.create'); //Formulario
Route::get('estudiantes/{id}',[EstudianteController::class,'show'])->name('estudiantes.show'); //Mostrar un solo est
Route::post('estudiantes',[EstudianteController::class,'store'])->name('estudiantes.store'); // No tiene view

Route::get('estudiantes/equis',[EstudianteController::class,'equis'])->name('estudiantes.equis'); //Formulario


