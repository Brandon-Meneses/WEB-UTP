<?php

namespace App\Http\Controllers;

use App\Models\Curso;
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
    public function show(string $idCurso)
    {
        // Verifica si el curso con el ID existe
        $curso = Curso::find($idCurso);

        if (!$curso) {
            return redirect("/cursos");
        }

        // Obtén los videos asociados al curso
        $videos = VideosCurso::where('id_curso', $idCurso)->orderBy('orden')->get();

        // Retorna la vista dashboard con los videos del curso
        return view('dashboard')->with('videos', $videos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // editar/actualizar lo que venga por Route::get('/cursos/editvideo/{idVideo}', 'edit');
    public function edit(Request $request, VideosCurso $idVideo){
        $idVideo->update($request->all());
        return redirect("/cursos/".$idVideo->id_curso."/editar");
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
