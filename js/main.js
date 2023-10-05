
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

/*

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
      <button class="btn-carrito" id="btn-carrito">                    
          <box-icon color='#ffffff' name='cart'></box-icon>
      </button>
      <p class="precio">${curso.precio}</p>

    </div>
    `;

    repertorio.appendChild(div);
}

cursos.forEach(curso => crearTarjeta(curso));

*/

// Buscador:
const buscar = document.querySelector('.search-bar input');

buscar.addEventListener('keyup', (e) => {
  const busqueda = e.target.value.toLowerCase();
  const tarjetas = document.querySelectorAll('.course');

  tarjetas.forEach(tarjeta => {
    const nombre = tarjeta.querySelector('h3').textContent.toLowerCase();
    const descripcion = tarjeta.querySelector('p').textContent.toLowerCase();

    if(nombre.indexOf(busqueda) !== -1 || descripcion.indexOf(busqueda) !== -1) {
      tarjeta.style.display = 'block';
    } else {
      tarjeta.style.display = 'none';
    }
  });
});

/*

//Carrito de compras:
const carrito = [];
const contadorCarrito = document.querySelector('.contador-carrito');
const carritoElement = document.getElementById('carrito');

function agregarAlCarrito(curso) {
  console.log('Se hizo clic en el botón carrito');
  carrito.push(curso);
  actualizarCarrito();
}

function actualizarCarrito() {
  contadorCarrito.textContent = carrito.length;


  carritoElement.innerHTML = '';


  const contadorNumero = parseInt(contadorCarrito.textContent);

  if (contadorNumero > 0) {
    contadorCarrito.style.color = 'red';
  } else {
    contadorCarrito.style.color = 'white'; 
  }

}

const botonesCarrito = document.querySelectorAll('.btn-carrito');
botonesCarrito.forEach((boton, index) => {
  boton.addEventListener('click', () => {
    const curso = cursos[index];
    agregarAlCarrito(curso);
  });
});

*/


class carritoCompras{

  listaCarrito = []; // Lista de IDs de los cursos en el carrito

  constructor() {
    this.listaCarrito = [];
    this.cargarCarritoLS();
  }

  agregarCurso(objCurso) {

    this.alertaCursoAgregado();

    // si el curso ya está en el carrito, no lo agrego
    if (this.listaCarrito.find(curso => curso.ID === objCurso.ID)) {
      console.log('No agregado, ID: ' + objCurso.ID +' ya está en el carrito');
      return;
    }

    this.listaCarrito.push(objCurso);
    console.log('Se agregó el curso ID: ' + objCurso.ID + ' al carrito');
    console.log(this.listaCarrito);

    this.guardarCarritoLS();

  }

  // alerta de curso agregado por SweetAlert2
  alertaCursoAgregado() {
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Curso agregado al carrito',
      showConfirmButton: false,
      timer: 1500
    })
  }

  // Elimina un curso del carrito
  eliminarCurso(ID) {
    this.listaCarrito = this.listaCarrito.filter(curso => curso.ID !== ID);
    console.log('Se eliminó el curso ID: ' + ID + ' del carrito');
    console.log(this.listaCarrito);
  }

  // local storage - guardar carrito
  guardarCarritoLS() {
    localStorage.setItem('carrito', JSON.stringify(this.listaCarrito));
    console.log('Se guardó el carrito en el local storage');
  }

  // local storage - cargar carrito
  cargarCarritoLS() {
    let datosLS = JSON.parse(localStorage.getItem('carrito'));
    if (datosLS !== null){
      this.listaCarrito = datosLS;
    }
    console.log(this.listaCarrito)
  }
  
}
const classCarrito = new carritoCompras();
