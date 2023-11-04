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

// Registro
Route::get('/registro', function () {
    return view('registro');
});

// CRUD de cursos 
Route::controller(CursoController::class)->group(function(){
    
    Route::get('/cursos', 'index');
    Route::get('/cursos/gestion', 'create');
    Route::post('/cursos/gestion', 'store');
    Route::get('/cursos/{idCurso}', 'show');
    Route::get('/cursos/{idCurso}/editar', 'edit');
    Route::patch('/cursos/{idCurso}', 'update'); // patch es para actualizar, en el html usar el metodo POST y agregar @method('PATCH') en el formulario
    Route::post('/cursos/{idCurso}/addVideo', 'addVideo');
    Route::delete('/cursos/{idCurso}', 'destroy');
    
});

// Carrito
Route::get('/carrito', function () {
    return view('carrito');
});


