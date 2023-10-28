<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
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
    return view('landing');
});

Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/registro', function () {
    return view('registro');
});



// CRUD de cursos 
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('/cursos/{idCurso}', [CursoController::class, 'show'])->name('cursos.show');
Route::get('/cursos/{idCurso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{idCurso}', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('/cursos/{idCurso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

// CRUD de usuarios

