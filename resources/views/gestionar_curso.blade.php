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

  <div class="mt-8 p-8 max-w-md mx-auto bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-center mb-6">Crear un Nuevo Curso</h2>
    
    <!-- Formulario para crear un curso -->
    <form action="/cursos/gestion" method="POST">

      @csrf  {{--  <- Directiva de Blade para proteger el formulario, genera un token unico --}}
      
      <div class="mb-4">
        <label for="nombre" class="block text-gray-700 font-medium">Nombre del Curso</label>
        <input type="text" id="nombre" name="nombre" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
      </div>
      
      <div class="mb-4">
        <label for="descripcion" class="block text-gray-700 font-medium">Descripción</label>
        <textarea id="descripcion" name="descripcion" class="w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
      </div>
      
      <div class="mb-4">
        <label for="categoria" class="block text-gray-700 font-medium">Categoría</label>
        <select id="categoria" name="categoria" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
          <option value=""></option>
          <option value="Frontend">Frontend</option>
          <option value="Backend">Backend</option>
          <option value="Devops">Devops</option>
        </select>
      </div>
      
      <div class="mb-4">
        <label for="precio" class="block text-gray-700 font-medium">Precio</label>
        <input type="text" id="precio" name="precio" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
      </div>
      
      <div class="mb-4">
        <label for="url_imagen" class="block text-gray-700 font-medium">URL de la Imagen</label>
        <input type="text" id="url_imagen" name="url_imagen" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
      </div>
      
      <button type="submit" class="btn btn-primary hover:btn-secondary">Crear Curso</button>
    </form>
  </div>
    
</body>
</html>