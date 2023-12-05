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
                            <th class="border border-gray-300 px-4 py-2">Video</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${videos.map(video => `
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">${video.orden}</td>
                                <td class="border border-gray-300 px-4 py-2">${video.nombre}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <a href="${video.url_video}" target="_blank" style="cursor: pointer; color: blue; text-decoration: underline;">
                                        ${video.url_video}
                                    </a>
                                </td>
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
