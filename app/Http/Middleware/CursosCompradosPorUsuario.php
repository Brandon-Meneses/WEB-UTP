<?php

namespace App\Http\Middleware;

use App\Models\Compra;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CursosCompradosPorUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            $cursosComprados = Compra::where('id_usuario', auth()->id())->pluck('id_curso');

            if ($cursosComprados->contains($request->idCurso)) {
                return $next($request);
            }
        }

        return redirect('/cursos/' . $request->idCurso);
    }
}
