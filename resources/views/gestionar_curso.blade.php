<x-app-layout titulo="">

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

  {{-- aliminar curso, se lecciona de un menu desplegable y se confirma mediante un boton --}}
  <div class="mt-8 mb-16 p-8 max-w-md mx-auto bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-center mb-6">Eliminar un Curso</h2>
    
    <!-- Formulario para eliminar un curso -->
    <form action="/cursos/eliminar" method="POST">

      @csrf  {{--  <- Directiva de Blade para proteger el formulario, genera un token unico --}}
      @method('DELETE') {{--  <- Directiva de Blade para indicar que el formulario es de tipo DELETE --}}
      
      <div class="mb-4">
        <label for="id" class="block text-gray-700 font-medium">Eliminar Curso</label>
        <select id="id" name="id" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
          <option value=""></option>
          @foreach ($cursos as $curso)
            <option value="{{$curso->id}}">{{$curso->nombre}}</option>
          @endforeach
        </select>
      </div>
      
      <button type="submit" id="eliminar-curso" class="btn btn-primary hover:btn-secondary">Eliminar</button>
    </form>

    <script>
      // Espera a que el documento esté listo
      document.addEventListener("DOMContentLoaded", function () {
        const selectCurso = document.getElementById("id");
        const botonEliminar = document.getElementById("eliminar-curso");
    
        botonEliminar.addEventListener("click", function (event) {
          const seleccionado = selectCurso.options[selectCurso.selectedIndex];
          const nombreCurso = seleccionado ? seleccionado.text : "el curso";
    
          const confirmacion = confirm(`¿Se eliminará "${nombreCurso}"`);
          
          if (!confirmacion) {
            event.preventDefault(); // Evita el envío del formulario si se cancela la eliminación
          }
        });
      });
    </script>
  </div>   
    
</x-app-layout>