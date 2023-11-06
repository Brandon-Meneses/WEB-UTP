<x-principal.marco-general :titulo="$curso->nombre">



  <div class="mt-4 min-w-screen  flex items-center p-5 lg:p-10 overflow-hidden relative">
    <div class=" max-w-[400px] w-full md:max-w-5xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
      <div class="md:flex items-center -mx-10 ">
        <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
          <div class="relative">
            <img src="{{$curso->url_imagen}}" class="w-full relative z-10" alt="">
            <div class="border-4 border-yellow-200 absolute top-10 bottom-10 left-10 right-10 z-0"></div>
          </div>
        </div>
        <div class="w-full md:w-1/2 px-10">
          <div class="mb-10">
            <h1 class="font-bold text-purple-700 uppercase text-sm mb-2">{{$curso->categoria}}</h1>
            <h1 class="font-bold uppercase text-2xl mb-5">{{$curso->nombre}}</h1>
            <p class="text-sm">{{$curso->descripcion}}</p>
          </div>
          <div>
            <div class="inline-block align-bottom mr-5">
              <span class="text-2xl leading-none align-baseline">$</span>
              <span class="font-bold text-5xl leading-none align-baseline">{{$curso->precio}}</span>
            </div>
            <div class="inline-block align-bottom">
              <button class="btn btn-primary">Compra ahora</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- tabla de los nombres video que se brindarán: --}}
  <div class="mt-4 flex items-center justify-center mb-16">
    <div class="w-full max-w-screen-md p-4 bg-white rounded-lg shadow-lg">
      <table class="w-full border-collapse border border-gray-300">
        <thead>
          <tr>
            <th class="border border-gray-300 px-4 py-2">N°</th>
            <th class="border border-gray-300 px-4 py-2">Contenido</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($videos as $video)
            <tr>
              <td class="border border-gray-300 px-4 py-2">{{$video->orden}}</td>
              <td class="border border-gray-300 px-4 py-2">{{$video->nombre}}</td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
    
</x-principal.marco-general>