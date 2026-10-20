const botonMenu = document.getElementById("menu");
const listaMenu = document.getElementById("menu-list");

botonMenu.addEventListener("click", () => {
  listaMenu.classList.toggle("abierto");
});


const botonTema = document.getElementById("tema");

botonTema.addEventListener("click", () => {
  document.body.classList.toggle("oscuro");

  if (document.body.classList.contains("oscuro")) {
    botonTema.textContent = "☀️ Modo claro";
  } else {
    botonTema.textContent = "🌙 Modo oscuro";
  }
});

//validacion form//
const formularioPedido = document.querySelector("#form-contacto");
const avisoPedido = document.querySelector("#aviso-contacto");

function revisarPedido(event) {
    //event.preventDefault();
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "") {
        avisoPedido.textContent = "Falta tu nombre, caserito.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    } else if (correo.includes("@") === false) {
        avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    } else {
        avisoPedido.textContent = "Pedido recibido, caserito. Te contactamos hoy.";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");
    }
}

formularioPedido.addEventListener("submit", revisarPedido);