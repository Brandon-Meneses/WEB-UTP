
<x-app-layout titulo="">

  <div class="flex flex-col lg:flex-row min-h-[80vh] max-w-[1200px] mx-auto">
    
    <!-- Contenedor del video -->
    <div class="w-full mx-auto">
      <div class="m-2 mb-4">
        <h2 class="text-2xl font-semibold my-4">
          {{$video->orden}} - {{$video->nombre}}
        </h2>
        <div class="mx-auto h-[60vh] md:min-h-[500px]">

          @include('components.video-card')

        </div>
      </div>
    </div>


    <!-- Lista de videos en el lado izquierdo -->
    <aside class="p-4">
        <h2 class="text-2xl font-semibold mt-2 mb-4">Lista de Cursos</h2>

        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">N°</th>
                    <th class="px-4 py-2">Contenido</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{$video->orden}}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="/cursos/{{$video->id_curso}}/{{$video->orden}}">{{$video->nombre}}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </aside>
  </div>

</x-app-layout>