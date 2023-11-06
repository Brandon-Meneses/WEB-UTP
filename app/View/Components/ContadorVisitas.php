<?php

namespace App\View\Components;

use App\Models\Compra;
use App\Models\Curso;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContadorVisitas extends Component
{
    public $cantidadPersonas; // para que este disponible en la vista tiene que ser publico !!
    public $cantidadCursos;
    public $cantidadCursosVendidos;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cantidadPersonas = User::count();
        $this->cantidadCursos = Curso::count();
        $this->cantidadCursosVendidos = Compra::count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contador-visitas');
    }
}
