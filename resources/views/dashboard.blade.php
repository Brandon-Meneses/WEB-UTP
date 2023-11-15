<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mis cursos') }}
        </h2>
    </x-slot>
    <div class="min-h-[60vh]">

        @include('components.promo-carrusel')

        {{-- @include('components.video-table') --}}

        @include('carrusel')

    </div>
    {{-- al hacer click en la imagen del carrusel obtengo su id para mostrar los videos relacionados a ese curso --}}
    {{-- <script>
        function obtenerVideosDelCurso(cursoId) {
            fetch(`/api/curso/${cursoId}/videos`)
                .then(response => response.json())
                .then(data => mostrarVideos(data))
                .catch(error => console.error('Error al obtener los videos', error));
        }

        function mostrarVideos(videos) {
            // Limpia el contenedor de videos
            const videosContainer = document.getElementById('videos-container');
            videosContainer.innerHTML = '';

            // Carga el componente video-tabla.blade con los datos de los videos
            const videoTablaContainer = document.createElement('div');
            videoTablaContainer.innerHTML = `
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
                                ${videos.map(video => `
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">${video.orden}</td>
                                        <td class="border border-gray-300 px-4 py-2">${video.nombre}</td>
                                    </tr>
                                `).join('')}
                            </tbody>
                        </table>
                    </div>
                </div>
            `;

            // Agrega el componente al contenedor de videos
            videosContainer.appendChild(videoTablaContainer);
        }

        document.addEventListener('DOMContentLoaded', function () {
            const carrusel = document.querySelector('.carousel');
            carrusel.addEventListener('click', (e) => {
                const cursoItem = e.target.closest('.carousel-item') || e.target.parentNode.closest('.carousel-item');
                const id = cursoItem.getAttribute('id');
                if (id) {
                    obtenerVideosDelCurso(id);
                }
            });
        });
    </script> --}}
    <!-- Contenedor para mostrar los videos -->
    <div id="videos-container"></div>
    {{-- ruta de dashboard.js para anexar a este blade --}}
    <script src="{{ asset('js/dashboard.js') }}"></script>
</x-app-layout>
