// Obtener los enlaces y las cartas
const links = document.querySelectorAll("nav a");
const sections = document.querySelectorAll(".section");

// Función para ocultar todas las cartas
function hideAllSections() {
  sections.forEach((section) => {
    section.classList.remove("active");
  });
}

// Evento para cada enlace
links.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault(); // Evitar el comportamiento por defecto del enlace

    // Obtener el objetivo del atributo data-target
    const targetId = link.getAttribute("data-target");
    const targetCard = document.getElementById(targetId);

    // Cambiar la visibilidad de las cartas
    hideAllSections();
    targetCard.classList.add("active");
  });
});
