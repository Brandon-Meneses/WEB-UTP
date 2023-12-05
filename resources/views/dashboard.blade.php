<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mis cursos') }}
        </h2>
    </x-slot>
    <div class="min-h-[60vh]">

        @include('components.promo-carrusel')
        @include('carrusel')

    </div>


    <!-- Contenedor para mostrar los videos -->
    <div id="videos-container"></div>
    {{-- Estilos para cambiar el cursor --}}
    <style>
        .carousel-item {
            cursor: pointer;
        }

        .carousel-item:hover {
            cursor: pointer; 
        }
    </style>
    {{-- ruta de dashboard.js para anexar a este blade --}}
    <script src="{{ asset('js/dashboard.js') }}"></script>
</x-app-layout>
