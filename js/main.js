
const cursos = [
  {
      nombre: 'Desarrollo Web con HTML, CSS y JavaScript',
      imagen: './img/courses/web.jpg',
      descripcion: 'Aprende a crear sitios web interactivos desde cero con las tecnologías fundamentales de la web.',
      precio: '$49.99',
  },
  {
      nombre: 'Programación en Python',
      imagen: './img/courses/python.jpg',
      descripcion: 'Domina uno de los lenguajes de programación más populares y versátiles.',
      precio: '$59.99',
  },
  {
      nombre: 'Desarrollo de Aplicaciones Móviles con React Native',
      imagen: './img/courses/movilReact.jpg',
      descripcion: 'Crea aplicaciones móviles multiplataforma con JavaScript y React Native.',
      precio: '$79.99',
  },
  {
      nombre: 'Bases de Datos SQL y MySQL',
      imagen: './img/courses/sql.jpg',
      descripcion: 'Aprende a diseñar y administrar bases de datos relacionales con SQL y MySQL.',
      precio: '$69.99',
  },
  {
      nombre: 'Desarrollo de Aplicaciones con Node.js',
      imagen: './img/courses/node.jpg',
      descripcion: 'Construye aplicaciones del lado del servidor utilizando Node.js y Express.',
      precio: '$59.99',
  },
  {
      nombre: 'Desarrollo de Aplicaciones con Java',
      imagen: './img/courses/java.jpg',
      descripcion: 'Aprende a programar en Java y desarrolla aplicaciones empresariales robustas.',
      precio: '$79.99',
  },
];


const repertorio = document.querySelector('.tarjetas-cursos');

function crearTarjeta(curso) {

    const div = document.createElement('div');
    div.classList.add('course');

    div.innerHTML = `
    <img src="${curso.imagen}" alt="${curso.nombre}">
    <h3>${curso.nombre}</h3>
    <p>${curso.descripcion}</p>
    <div class="venta-p">
      <button class="btn-saber-mas">Más</button>
      <button class="btn-carrito">                    
          <box-icon color='#ffffff' name='cart'></box-icon>
      </button>
      <p class="precio">${curso.precio}</p>
    </div>
    `;

    repertorio.appendChild(div);
}

cursos.forEach(curso => crearTarjeta(curso));