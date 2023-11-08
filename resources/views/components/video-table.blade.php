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
