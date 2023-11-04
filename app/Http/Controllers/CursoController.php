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
        $categorias = Curso::select('categoria')->distinct()->get();
        //dd($cursos);  // dd() muestra el contenido de la variable y luego para la ejecución del programa 
        return view('cursos')->with('cursos', $cursos)->with('categorias', $categorias); // en el with el primero es el nombre de la variable que se usará en la vista y el segundo es el valor de la variable
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::get();
        
        return view('gestionar_curso')->with('cursos', $cursos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        /*          //primera forma de guardar en la base de datos
        $curso = new Curso();
        $curso->nombre = $request->input('nombre');
        $curso->descripcion = $request->input('descripcion');
        $curso->categoria = $request->input('categoria');
        $curso->precio = $request->input('precio');
        $curso->url_imagen = $request->input('url_imagen');
        $curso->save();
        */

        // segunda forma de guardar en la base de datos
        Curso::create( // si la tabla es el plural del modelo, no es necesario definir el nombre de la tabla
            [
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'categoria' => $request->categoria,
                'precio' => $request->precio,
                'url_imagen' => $request->url_imagen
            ]
        );

        return redirect("/cursos/gestion");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        /*
        al clicar el botón de comprar, se ejecuta la función show y se pasa el id del curso
        Route::get('/cursos/{idCurso}', 'show');
        */

        $curso = Curso::find($id);
        //return 'curso: ' . $curso->nombre . ' - ' . $curso->descripcion . ' - ' . $curso->categoria . ' - ' . $curso->precio . ' - ' . $curso->url_imagen . ' - ' . $curso->id;
        return view('detalle_curso')->with('curso', $curso);
       
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
