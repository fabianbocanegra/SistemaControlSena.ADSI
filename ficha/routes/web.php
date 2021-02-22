<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProgramaController;

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


Route::get('fichas',[FichaController::class,'listado'])->name('fichas.listado');
Route::get('fichas/inactiva',[FichaController::class,'listadoinactivo'])->name('fichas.inactiva');
Route::get('fichas/crear',[FichaController::class,'registrar'])->name('fichas.crear');
Route::post('fichas',[FichaController::class,'guardar'])->name('fichas.guardar');
Route::get('fichas/editar/{id}',[FichaController::class,'edicion'])->name('fichas.editar');
Route::put('fichas/{id}',[FichaController::class,'actualizar'])->name('fichas.actualizar');

Route::get('programas',[ProgramaController::class,'listado'])->name('programas.listado');
Route::get('programas/crear',[ProgramaController::class,'registrar'])->name('programas.crear');
Route::post('programas',[ProgramaController::class,'guardar'])->name('programas.guardar');
Route::get('programas/editar/{id}',[ProgramaController::class,'editar'])->name('programas.editar');
Route::put('programa/{id}', [ProgramaController::class,'actualizar'])->name('programas.actualizar');

Route::get('aprendices',[AprendizController::class,'listado'])->name('aprendices.listado');
Route::get('aprendices/crear',[AprendizController::class,'registrar'])->name('aprendices.crear');
Route::post('aprendices',[AprendizController::class,'almacenar'])->name('aprendices.guardar');
Route::get('aprendices/editar/{id}',[AprendizController::class,'editar'])->name('aprendices.editar');
Route::put('aprendices/{id}', [AprendizController::class,'actualizar'])->name('aprendices.actualizar');
Route::delete('aprendices/{id}',[AprendizController::Class,'borrar'])->name('aprendices.borrar');

Route::get('instructores',[InstructorController::class,'listado'])->name('instructores.listado');
Route::get('instructores/crear',[InstructorController::class,'registrar'])->name('instructores.crear');
Route::post('instructores',[InstructorController::class,'guardar'])->name('instructores.guardar');
Route::get('instructores/editar/{id}',[InstructorController::class,'editar'])->name('instructores.editar');
Route::put('instructores/{id}', [InstructorController::class,'actualizar'])->name('instructores.actualizar');
