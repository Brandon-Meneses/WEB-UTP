

<x-app-layout titulo="Cursos">

  {{-- <x-slot name="header">Cursos</x-slot> --}}

  {{-- aqui iran los cursos, al costado izquierdo tendrá un aside para filtrar por categoria y en el derecho los cursos mostrados en grid --}}
  <div class="font-sans max-w-[1200px] m-auto">
      <div class="flex flex-col md:flex-row min-h-[80vh]"> 

          <!-- Aside (Barra lateral izquierda) -->
          <aside class="min-w-[185px] max-w-[300px] max-h-56 mx-4 my-16 p-6  shadow-lg rounded-lg mr-auto ml-auto">
            <h2 class="font-bold uppercase text-xl mb-4 text-gray-700">Categorías</h2>
        
            @foreach ($categorias as $categoria)
              <label class="flex items-center space-x-2 text-gray-600">
                <input type="checkbox" class="form-checkbox text-indigo-600">
                <span>{{$categoria->categoria}}</span>
              </label>              
            @endforeach

          </aside>
        

          <!-- Contenido principal (Productos en grilla) -->
          <div class="max-w-max md:w-3/4 p-4 min-h-max mx-auto">
              <h1 class="font-bold uppercase text-2xl mb-4 ml-2">Cursos disponibles</h1>
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 justify-items-center">
                
                @foreach ($cursos as $curso)
                    <div class="card bg-base-100 shadow-xl max-w-[260px] hover:scale-[1.01] ease-in duration-300">
                        <figure><img src="{{ $curso->url_imagen }}" alt="{{ $curso->nombre }}" /></figure>
                        <div class="card-body">

                            {{-- si el curso ha sido creado hace menos de 30 dias, muestra el tag de nuevo --}}
                            @if (Carbon\Carbon::parse($curso->created_at)->diffInDays(Carbon\Carbon::now()) < 30)
                              <span class="max-w-min inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">NUEVO</span>
                            @endif
                            
                            <h2 class="card-title">{{ $curso->nombre }}</h2>
                            <p class="line-clamp-3 overflow-hidden">{{ $curso->descripcion }}</p>
                            <div class="card-actions justify-end">
                                <a class="btn btn-primary" href="/cursos/{{$curso->id}}" >saber más</a>
                            </div>
                        </div>
                    </div>
                @endforeach

              </div>
          </div>

      </div>
  </div>

</x-app-layout>