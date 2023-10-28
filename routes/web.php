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

// Carrito
Route::get('/carrito', function () {
    return view('carrito');
});

// CRUD de cursos 
Route::controller(CursoController::class)->group(function(){

    Route::get('/cursos', 'index');
    Route::get('/cursos/create', 'create')->name('cursos.create');
    Route::post('/cursos', 'store')->name('cursos.store');
    Route::get('/cursos/{idCurso}', 'show')->name('cursos.show');
    Route::get('/cursos/{idCurso}/edit', 'edit')->name('cursos.edit');
    Route::put('/cursos/{idCurso}', 'update')->name('cursos.update');
    Route::delete('/cursos/{idCurso}', 'destroy')->name('cursos.destroy');
    
});


// CRUD de usuarios

