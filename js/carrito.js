class Carrito {
    constructor() {
        this.carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        this.renderCarrito();
        
    }
    
    borrarProducto(id) {
        this.carrito = this.carrito.filter(producto => parseInt(producto.ID) !== parseInt(id));
        localStorage.setItem('carrito', JSON.stringify(this.carrito));
        this.renderCarrito();
    }
    
    renderCarrito() {
        this.tbody = document.querySelector('.tabla-cursos-carrito');
        this.tbody.innerHTML = '';

        this.carrito.forEach(producto => {
            const tr = document.createElement('tr');
            tr.classList.add("ID-" + producto.ID);
            tr.innerHTML = `
                <td class="px-4 py-2"><img src="${producto.URL_imagen}" alt="${producto.Nombre_curso}" class="w-16 h-16"></td>
                <td class="px-4 py-2">${producto.Nombre_curso}</td>
                <td class="px-4 py-2">$${producto.Precio}</td>
                <td class="px-4 py-2"><button class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded" onclick="carrito.borrarProducto(${producto.ID})">Borrar</button></td>
            `;
            this.tbody.appendChild(tr);
        });
    }
}

const carrito = new Carrito();
