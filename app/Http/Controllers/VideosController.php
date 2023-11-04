<?php

namespace App\Http\Controllers;

use App\Models\VideosCurso;
use Illuminate\Http\Request;

class VideosController extends Controller
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
    public function create(Request $request, string $idCurso)
    {
        //dd($request->all());
        
        VideosCurso::create(
            [
                'id_curso' => $idCurso,
                'nombre' => $request->nombre,
                'url_video' => $request->url_video,
                'orden' => $request->orden
            ]
        );

        return redirect("/cursos/".$idCurso."/editar");
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
        //
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
