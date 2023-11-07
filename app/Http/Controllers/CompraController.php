<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show()
    {
        //verifica si el usuario esta autenticado y retorna los cursos que ha comprado 
        if (Auth::check()) {
            
            $id_usuario = Auth::id();
            $compras = Compra::where('id_usuario', $id_usuario)->get();
            //retorna los cursos de los id_curso que ha comprado el usuario 
            $cursos = array();
            foreach ($compras as $compra) {
                $cursos[] = Curso::where('id', $compra->id_curso)->get();
            }
            return view('dashboard') -> with('cursos', $cursos);
            
        } else {
            return redirect()->route('login');
        }
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
