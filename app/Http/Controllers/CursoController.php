<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // NO ES NECESARIO IMPORTARLO -  para usar la DB (similar al comando 'php artisan tinker' por consola)

class CursoController extends Controller
{

    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::get();
        //dd($cursos);  // dd() muestra el contenido de la variable y luego para la ejecución del programa 
        return view('cursos')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = DB::table('cursos')->get();
        
        return view('crearCurso')->with('cursos', $cursos); // en el with el primero es el nombre de la variable que se usará en la vista y el segundo es el valor de la variable
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
