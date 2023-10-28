<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // para usar DB (similar al comando 'php artisan tinker' por consola)

class CursoController extends Controller
{

    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = DB::table('cursos')->get();
        //dd($cursos);  // dd() muestra el contenido de la variable y luego para la ejecución del programa 
        return view('cursos')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Se ha creado el curso: ";
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
