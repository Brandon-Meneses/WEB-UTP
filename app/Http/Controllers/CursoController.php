<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{

    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = [
            [
                'nombre' => 'Desarrollo Web con HTML, CSS y JS',
                'descripcion' => 'Aprende a crear sitios web interactivos desde cero con tecnologías web.',
                'precio' => 49.99,
                'imagen' => 'https://i.postimg.cc/brjJ9TmR/web.jpg',
            ],
            [
                'nombre' => 'Programación en Python',
                'descripcion' => 'Domina uno de los lenguajes más populares y versátiles.',
                'precio' => 59.99,
                'imagen' => 'https://i.postimg.cc/j5f2f945/python.jpg',
            ],
            [
                'nombre' => 'Desarrollo de Aplicaciones Móviles',
                'descripcion' => 'Crea aplicaciones móviles multiplataforma con React Native.',
                'precio' => 79.99,
                'imagen' => 'https://i.postimg.cc/jS8DYyjs/movil-React.jpg',
            ],
            [
                'nombre' => 'Bases de Datos SQL y MySQL',
                'descripcion' => 'Aprende a diseñar y administrar bases de datos relacionales.',
                'precio' => 69.99,
                'imagen' => 'https://i.postimg.cc/wBZ37HJZ/sql.jpg',
            ],
            [
                'nombre' => 'Desarrollo de Aplicaciones con Node.js',
                'descripcion' => 'Construye aplicaciones del lado del servidor con Node.js.',
                'precio' => 59.99,
                'imagen' => 'https://i.postimg.cc/d3m0HyXc/node.jpg',
            ],
            [
                'nombre' => 'Desarrollo de Aplicaciones con Java',
                'descripcion' => 'Aprende Java y desarrolla aplicaciones empresariales robustas.',
                'precio' => 79.99,
                'imagen' => 'https://i.postimg.cc/W4hhNtD0/java.jpg',
            ],
        ];

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
