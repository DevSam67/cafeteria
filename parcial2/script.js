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
const formularioPedido = document.querySelector("#form-horno");
const avisoPedido = document.querySelector("#aviso-horno");

function revisarPedido(event) {
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const pedido = document.querySelector("#pedido").value;


    if (nombre === "" || correo === "") {
        avisoPedido.textContent = "Sin tu nombre y tu correo no anotamos el pedido.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
        event.preventDefault();
    } else if (correo.includes("@") === false) {
        avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
        event.preventDefault();
    } else if (pedido === "") {
        avisoPedido.textContent = "Por favor agregue un pedido";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
        event.preventDefault();  
    } else {
        avisoPedido.textContent = "Pedido recibido caserito";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");
    }
}

let carta = [
  "Salteña de pollo - Bs 6",
  "Docena de salteñas - Bs 65",
  "Refresco de mocochinchi - Bs 5"
];

let lista = document.getElementById("menu-salteñas");

carta.forEach(function(producto) {
  lista.innerHTML += "<li>" + producto + "</li>";
});

formularioPedido.addEventListener("submit", revisarPedido);