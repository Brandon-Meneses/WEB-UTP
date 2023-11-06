<?php

namespace App\View\Components;

use App\Models\Curso;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UltimosCursos extends Component
{
    public $ultimoscursos; // para que este disponible en la vista tiene que ser publico !!
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->ultimoscursos = Curso::orderBy('created_at', 'desc')->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ultimos-cursos');
    }
}
