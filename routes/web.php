<?php

use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CarruselController;

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
//Carrusel
Route::get('/carrusel', [CarruselController::class, 'showCarrusel']);

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
    Route::delete('/cursos/eliminar', 'destroy');
    
});

//CRUD para videos
Route::controller(VideosController::class)->group(function(){

    Route::post('/cursos/{idCurso}/addvideo', 'create');
    Route::patch('/cursos/editvideo/{idVideo}', 'edit');
    
});

// Carrito
Route::get('/carrito', function () {
    return view('carrito');
});


