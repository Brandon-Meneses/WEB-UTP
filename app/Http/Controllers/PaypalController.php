<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    //Route::post('/paypal/pay/{idCurso}', 'payWithPayPal')
    public function payWithPayPal(Request $request, $idCurso)
    {
        $curso = Curso::find($idCurso);
        $precio = $curso->precio;

        //obtener el id del usuario loguardo
        $usuario = auth()->user();
        
        dd($curso->toArray(), $usuario->toArray());
    }

}
