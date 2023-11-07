<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\VideosCurso;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // NO ES NECESARIO IMPORTARLO -  para usar la DB (similar al comando 'php artisan tinker' por consola)

class CursoController extends Controller
{

    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::orderBy('created_at', 'desc')->get();
        $categorias = Curso::select('categoria')->distinct()->get();
        //dd($cursos);  // dd() muestra el contenido de la variable y luego para la ejecución del programa 
        return view('cursos')->with('cursos', $cursos)->with('categorias', $categorias); // en el with el primero es el nombre de la variable que se usará en la vista y el segundo es el valor de la variable
    }
    public function tienda()
    {
        $cursos = Curso::orderBy('created_at', 'desc')->get();
        $categorias = Curso::select('categoria')->distinct()->get();
        //dd($cursos);  // dd() muestra el contenido de la variable y luego para la ejecución del programa 
        return view('cursos-logueado')->with('cursos', $cursos)->with('categorias', $categorias); // en el with el primero es el nombre de la variable que se usará en la vista y el segundo es el valor de la variable
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
        //obtener el id del curso que se acaba de crear, que coincida el nombre y la descripción y el ultimo creado
        $curso = Curso::where('nombre', $request->nombre)->where('descripcion', $request->descripcion)->orderBy('id', 'desc')->first();
        return redirect("/cursos/".$curso->id."/editar");
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
        
        //si el id no existe, se redirige a la página de cursos
        if(!Curso::find($id)){
            return redirect("/cursos");
        }

        $curso = Curso::find($id);
        $videos = VideosCurso::where('id_curso', $id)->orderBy('orden')->get();
        return view('detalle_curso')->with('curso', $curso)->with('videos', $videos);  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $curso = Curso::find($id);
        $videos = VideosCurso::where('id_curso', $id)->orderBy('orden')->get();
        return view('editar_curso')->with('curso', $curso)->with('videos', $videos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $idCurso)
    {
        $idCurso->update($request->all());
        return redirect("/cursos/".$idCurso->id."/editar");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //dd($request->all());
        $curso = Curso::find($request->id);
        $curso->delete();
        return redirect("/cursos/gestion");
    }
}
