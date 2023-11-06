
<x-principal.marco-general titulo="Cursos">

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
              <h1 class="font-bold uppercase text-2xl mb-4 ml-2">Cursos</h1>
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 justify-items-center">
                
                @foreach ($cursos as $curso)
                    <div class="card bg-base-100 shadow-xl max-w-[260px] hover:scale-[1.01] ease-in duration-300">
                        <figure><img src="{{ $curso->url_imagen }}" alt="{{ $curso->nombre }}" /></figure>
                        <div class="card-body">
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

</x-principal.marco-general>