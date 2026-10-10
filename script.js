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