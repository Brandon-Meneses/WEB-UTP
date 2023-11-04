<!DOCTYPE html>
<html lang="es"data-theme="cupcake">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        @vite('resources/css/app.css')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Creando Curso - EasyCode</title>
</head>
<body>

  <div class="mt-16 p-8 max-w-md mx-auto bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-center mb-6">Editar Curso</h2>
    
    <!-- Formulario para editar un curso -->
    <form action="/cursos/{{$curso->id}}" method="POST">

      @csrf  {{--  <- Directiva de Blade para proteger el formulario, genera un token unico --}}
      @method('PATCH') {{--  <- Directiva de Blade para indicar que el formulario es de tipo PATCH --}}

      <div class="mb-4">
        <label for="nombre" class="block text-gray-700 font-medium">Nombre del Curso</label>
        <input type="text" id="nombre" name="nombre" class="w-full px-3 py-2 border border-gray-300 rounded-md" required value="{{$curso->nombre}}">
      </div>
      
      <div class="mb-4">
        <label for="descripcion" class="block text-gray-700 font-medium">Descripción</label>
        <textarea id="descripcion" name="descripcion" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>{{$curso->descripcion}}</textarea>
      </div>
      
      <div class="mb-4">
        <label for="categoria" class="block text-gray-700 font-medium">Categoría</label>
        <select id="categoria" name="categoria" class="w-full px-3 py-2 border border-gray-300 rounded-md" required value="{{$curso->categoria}}">
          <option value="Frontend" @if($curso->categoria === 'Frontend') selected @endif>Frontend</option>
          <option value="Backend" @if($curso->categoria === 'Backend') selected @endif>Backend</option>
          <option value="Devops" @if($curso->categoria === 'Devops') selected @endif>Devops</option>
        </select>
      </div>
      
      <div class="mb-4">
        <label for="precio" class="block text-gray-700 font-medium">Precio</label>
        <input type="text" id="precio" name="precio" class="w-full px-3 py-2 border border-gray-300 rounded-md" required value="{{$curso->precio}}">
      </div>
      
      <div class="mb-4">
        <label for="url_imagen" class="block text-gray-700 font-medium">URL de la Imagen</label>
        <input type="text" id="url_imagen" name="url_imagen" class="w-full px-3 py-2 border border-gray-300 rounded-md" required value="{{$curso->url_imagen}}">
      </div>
      
      <button type="submit" class="btn btn-primary hover:btn-secondary">Editar</button>

      <a href="/cursos/{{$curso->id}}" class="btn btn-secondary hover:btn-primary">Cancelar</a>
    </form>
  </div>
      


  <div class="mb-16 p-8 max-w-md mx-auto bg-white rounded-lg shadow-lg mt-6">
    <h2 class="text-2xl font-semibold text-center mb-6">Agregar clases</h2>
    
    <!-- Formulario para crear enlaces de video -->
    <form action="/cursos/{{$curso->id}}/addvideo" method="POST">
      @csrf 

      <div class="mb-4">
        <label for="nombre_video" class="block text-gray-700 font-medium">Nombre del video</label>
        <input type="text" id="nombre_video" name="nombre" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
      </div>
      
      <div class="mb-4">
        <label for="url_video" class="block text-gray-700 font-medium">URL del video</label>
        <input type="text" id="url_video" name="url_video" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
      </div>
      
      <div class="mb-4">
        <label for="orden_video" class="block text-gray-700 font-medium">Numero de orden</label>
        <input type="number" id="orden_video" name="orden" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
      </div>
      
      <button type="submit" class="btn btn-primary hover:btn-secondary">Agregar</button>
    </form>
  </div>

  <div class="max-w-max md:w-3/4 p-4 min-h-max mx-auto mb-16">
    <h2 class="text-2xl font-semibold text-center mb-6">Editar clases</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 justify-items-center">
      @foreach ($videos as $video)
      <div class="p-8 max-w-md mx-auto bg-white rounded-lg shadow-lg">
        

        <form action="/cursos/editvideo/{{$video->id}}" method="POST">
          @csrf 
          @method('PATCH') 

          <div class="mb-4">
            <label for="nombre_video" class="block text-gray-700 font-medium">Nombre del video</label>
            <input type="text" id="nombre_video" name="nombre" class="w-full px-3 py-2 border border-gray-300 rounded-md" required value="{{$video->nombre}}">
          </div>
          
          <div class="mb-4">
            <label for="url_video" class="block text-gray-700 font-medium">URL del video</label>
            <input type="text" id="url_video" name="url_video" class="w-full px-3 py-2 border border-gray-300 rounded-md" required value="{{$video->url_video}}">
          </div>
          
          <div class="mb-4">
            <label for="orden_video" class="block text-gray-700 font-medium">Numero de orden</label>
            <input type="number" id="orden_video" name="orden" class="w-full px-3 py-2 border border-gray-300 rounded-md" required value="{{$video->orden}}">
          </div>
          
          <button type="submit" class="btn btn-primary hover:btn-secondary">Editar</button>
        </form>
        
      </div>
      @endforeach
    </div>
  </div>

  {{-- cada video que venga de la bd es bocado para su edicion --}}
    
      
    
</body>
</html>