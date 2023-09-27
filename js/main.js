import cursos from "./obj.js";

console.log(cursos);

const repertorio = document.querySelector(".tarjetas-cursos");

function crearTarjeta(curso) {
  const div = document.createElement("div");
  div.classList.add("course");

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

cursos.forEach((curso) => crearTarjeta(curso));

// Buscador:

const buscar = document.querySelector(".search-bar input");

buscar.addEventListener("keyup", (e) => {
  const busqueda = e.target.value.toLowerCase();
  const tarjetas = document.querySelectorAll(".course");

  tarjetas.forEach((tarjeta) => {
    const nombre = tarjeta.querySelector("h3").textContent.toLowerCase();
    const descripcion = tarjeta.querySelector("p").textContent.toLowerCase();

    if (
      nombre.indexOf(busqueda) !== -1 ||
      descripcion.indexOf(busqueda) !== -1
    ) {
      tarjeta.style.display = "block";
    } else {
      tarjeta.style.display = "none";
    }
  });
});
