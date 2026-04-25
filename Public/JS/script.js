// Fecha y hora en vivo
function actualizarHora(){
    let ahora = new Date();
    document.getElementById("fechaHora").textContent = ahora.toLocaleString();
}
actualizarHora(); // ejecutar inmediatamente
setInterval(actualizarHora, 1000);

// Agregar artículos
function agregarArticulo(){
    let titulo = document.getElementById("titulo").value.trim();
    let descripcion = document.getElementById("descripcion").value.trim();

    if(titulo === "" || descripcion === ""){
        alert("Completa los campos");
        return;
    }

    let contenedor = document.getElementById("listaArticulos");

    let nuevo = document.createElement("div");
    nuevo.className = "column is-4";

    nuevo.innerHTML = `
        <div class="card">
            <div class="card-content">
                <p class="title is-5">${titulo}</p>
                <p>${descripcion}</p>
            </div>
        </div>
    `;

    contenedor.appendChild(nuevo);

    document.getElementById("titulo").value = "";
    document.getElementById("descripcion").value = "";

    actualizarContador();
}

// Contador
function actualizarContador(){
    let contenedor = document.getElementById("listaArticulos");
    let cantidad = contenedor.querySelectorAll(".column").length;

    document.getElementById("contador").textContent = "Artículos: " + cantidad;
}

// Validación formulario
function validarFormulario(){
    let nombre = document.getElementById("nombre").value.trim();
    let mensaje = document.getElementById("mensaje").value.trim();

    if(nombre === "" || mensaje === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }

    alert("Mensaje enviado correctamente");
    return true;
}

// Inicializar contador
actualizarContador();

// Funcionalidad para el menú responsivo de Bulma
document.addEventListener('DOMContentLoaded', () => {
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {
        const target = el.dataset.target;
        const $target = document.getElementById(target);
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});