class Carrito {
    constructor() {
        this.carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        this.renderCarrito();
        this.renderTotal();

    }
    
    borrarProducto(id) {
        this.carrito = this.carrito.filter(producto => parseInt(producto.ID) !== parseInt(id));
        localStorage.setItem('carrito', JSON.stringify(this.carrito));
        this.renderCarrito();
        this.renderTotal();
    }
    
    renderCarrito() {
        this.tbody = document.querySelector('.tabla-cursos-carrito');
        this.tbody.innerHTML = '';

        this.carrito.forEach(producto => {
            const tr = document.createElement('tr');
            tr.classList.add("ID-" + producto.ID);
            tr.innerHTML = `
                <td class="px-4 py-2">
                    <img src="${producto.URL_imagen}" alt="${producto.Nombre_curso}" class="w-auto h-16">
                </td>
                <td class="px-4 py-2">${producto.Nombre_curso}</td>
                <td class="px-4 py-2">$${producto.Precio}</td>
                <td class="px-4 py-2"><button class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded" onclick="carrito.borrarProducto(${producto.ID})">Borrar</button></td>
            `;
            this.tbody.appendChild(tr);
        });
    }

    calcularTotal() {
        let total = 0;
        this.carrito.forEach(producto => {
            total += parseFloat(producto.Precio);
        });
        return total;
    }

    renderTotal() {
        const total = this.calcularTotal();
        const totalElement = document.querySelector('.total');
        totalElement.innerHTML = `${total}`;
    }
}

const carrito = new Carrito();
