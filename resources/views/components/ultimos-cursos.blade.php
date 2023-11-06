<div>

    <!-- It is never too late to be what you might have been. - George Eliot -->
    <div>
         {{-- Componente para mostrar una lista de links a los cursos mas recientes --}}
        <h2 class="text-2xl font-bold mb-4">Ultimos cursos!</h2>

        {{-- {{dd($ultimoscursos)}} --}}
        <ul class="">
            
            @foreach ($ultimoscursos as $curso)

                <li><a class="hover:underline underline-offset-2" href="/cursos/{{$curso->id}}">{{$curso->nombre}}</a></li>
                
            @endforeach

        </ul>

    </div>
   
</div>