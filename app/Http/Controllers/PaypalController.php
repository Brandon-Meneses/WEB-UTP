<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    //Route::post('/paypal/pay/{idCurso}', 'payWithPayPal')
    public function payWithPayPal(Request $request, $idCurso)
    {
        $curso = Curso::find($idCurso)->toArray();

        $usuario = auth()->user()->toArray();
        
        dd($curso, $usuario);
    }

}
