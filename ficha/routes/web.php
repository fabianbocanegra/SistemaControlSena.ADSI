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


Route::get('ficha',[FichaController::class,'listado'])->name('ficha.listado');
Route::get('ficha/inactiva',[FichaController::class,'listadoinactivo'])->name('ficha.inactiva');
Route::get('ficha/crear',[FichaController::class,'registrar'])->name('ficha.crear');
Route::post('ficha',[FichaController::class,'guardar'])->name('ficha.guardar');
Route::get('ficha/editar/{id}',[FichaController::class,'edicion'])->name('ficha.editar');
Route::put('ficha/{id}',[FichaController::class,'actualizar'])->name('ficha.actualizar');

Route::get('programa',[ProgramaController::class,'listado'])->name('programa.listadp');
Route::get('programa/crear',[ProgramaController::class,'registrar'])->name('programa.crear');
Route::post('programa',[ProgramaController::class,'guardar'])->name('programa.guardar');
Route::get('programa/editar/{id}',[ProgramaController::class,'editar'])->name('programa.editar');
Route::put('program/{id}', [ProgramaController::class,'actualizar'])->name('programa.actualizar');

Route::get('aprendiz',[AprendizController::class,'listado'])->name('aprendiz.listado');
Route::get('aprendiz/crear',[AprendizController::class,'registrar'])->name('aprendiz.crear');
Route::post('aprendiz',[AprendizController::class,'almacenar'])->name('aprendiz.guardar');
Route::get('aprendiz/editar/{id}',[AprendizController::class,'editar'])->name('aprendiz.editar');
Route::put('aprendiz/{id}', [AprendizController::class,'actualizar'])->name('aprendiz.actualizar');
Route::delete('aprendiz/{id}',[AprendizController::Class,'borrar'])->name('aprendiz.borrar');

Route::get('instructor',[InstructorController::class,'listado'])->name('instructor.listado');
Route::get('instructor/crear',[InstructorController::class,'registrar'])->name('instructor.crear');
Route::post('instructor',[InstructorController::class,'guardar'])->name('instructor.guardar');
Route::get('instructor/editar/{id}',[InstructorController::class,'editar'])->name('instructor.editar');
Route::put('instructor/{id}', [InstructorController::class,'actualizar'])->name('instructor.actualizar');
