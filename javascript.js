const botonMenu = document.getElementById("menu");
const listaMenu = document.getElementById("menu-list");

botonMenu.addEventListener("click", () => {
  listaMenu.classList.toggle("abierto");
});