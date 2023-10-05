
class carritoCompras{

    constructor() {
      this.listaCarrito = []; // lista de cursos en el carrito
      this.cargarCarritoLS();
      this.indicadorCarrito();
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