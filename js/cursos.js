
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


// clase carrito de compras:

class carritoCompras{

  constructor() {
    this.listaCarrito = []; // lista de cursos en el carrito
    this.cargarCarritoLS();
    this.indicadorCarrito();
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
    this.indicadorCarrito();

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

    this.guardarCarritoLS();
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

  indicadorCarrito() {
    const numCompras = this.listaCarrito.length;
    const numIndicador = document.querySelector('.cart-indicator p');
    const cartIndicator = document.querySelector('.cart-indicator');
  
    
    numIndicador.textContent = numCompras;

    if (numCompras > 0) {
      cartIndicator.style.display = 'block';
    } else {
      cartIndicator.style.display = 'none';
    }
    
  }   
  
}
const classCarrito = new carritoCompras();
