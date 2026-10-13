function confirmarencargo() {
  const mensaje = document.querySelector("#mensaje");

  mensaje.textContent = "Encargo recibido - te atiende samuel canedo caballero";

  mensaje.classList.toggle("oculto");
}

document.querySelector("#btn-confirmar").addEventListener("click", confirmarencargo);