<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VideosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CarruselController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\PaypalController;




/* Autenticacion por GitHub */
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

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
    if (auth()->check()) {
        return redirect()->route('dashboard');
    } else {
        return view('welcome');
    }
});

// Route::get('/dashboard', function () {
//     return view('dashboard');

// })

// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// ---------------- Lo Nuestro: -----------------

//Route::get('/carrusel', [CarruselController::class, 'showCarrusel']);

//Route::view('/layout', 'layouts.app');

// Route::get('/', function () {
//     return view('landing');
// });

// Registro
Route::get('/registro', function () {
    return view('registro');
});
Route::controller(CompraController::class)->group(function(){
    Route::get('/dashboard', 'show')->middleware(['auth', 'verified'])->name('dashboard');
});

// CRUD de cursos 
Route::controller(CursoController::class)->group(function(){
    
    Route::get('/cursos', 'index');
    Route::get('/tienda', 'tienda')->middleware('auth.redirect:cursos');
    Route::get('/cursos/gestion', 'create')->middleware('admin');
    Route::post('/cursos/gestion', 'store')->middleware('admin');
    Route::get('/cursos/{idCurso}', 'show');
    Route::get('/cursos/{idCurso}/editar', 'edit')->middleware('admin');
    Route::patch('/cursos/{idCurso}', 'update')->middleware('admin'); // patch es para actualizar, en el html usar el metodo POST y agregar @method('PATCH') en el formulario
    Route::delete('/cursos/eliminar', 'destroy')->middleware('admin');
    
});

// videos
Route::controller(VideosController::class)->group(function(){

    Route::get('/api/curso/{id}/videos', 'obtenerVideosDelCurso');
    Route::post('/cursos/{idCurso}/addvideo', 'create');
    Route::patch('/cursos/editvideo/{idVideo}', 'edit');
    
});

// Carrito
Route::get('/carrito', function () {
    return view('carrito');
});

// Profile - añadir o quitar admin
Route::controller(UserController::class)->group(function(){
    Route::patch('/admin/switch', 'switchAdmin')->middleware('admin');
});


//pagos por paypal
Route::controller(PaypalController::class)->group(function(){
    Route::get('/paypal/payment', 'payment')->middleware('auth')->name('paypal.payment');
    Route::get('/paypal/success', 'success')->middleware('auth')->name('paypal.success');
    Route::get('/paypal/cancel', 'cancel')->middleware('auth')->name('paypal.cancel');
});