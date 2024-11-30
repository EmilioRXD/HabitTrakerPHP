const background = document.getElementById("background");

document.getElementById("myLink").addEventListener("click", () => {
  background.classList.remove("hidden"); // Agrega la clase para ocultar la tarjeta
  document.getElementById("save").classList.remove("hidden-btn");
  document.getElementById("update").classList.add("hidden-btn");
  document.querySelectorAll("input").forEach((input) => {
    input.value = "";
  });
  document.getElementById("form-event").action = "insert_event.php";
});

document.getElementById("save").addEventListener("click", () => {
  document.getElementById("form-event").submit();
});

document.getElementById("update").addEventListener("click", () => {
  document.getElementById("form-event").submit();
});

document.querySelector(".close").addEventListener("click", () => {
  background.classList.add("hidden");
});
// Seleccionar todos los botones de edición
const editButtons = document.querySelectorAll(".edit");

// Agregar evento a cada botón de edición
editButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault(); // Evitar navegación predeterminada

    // Obtener el ID del registro desde el atributo data-id
    const recordId = button.getAttribute("data-id");

    // Seleccionar el div correspondiente al registro
    const card = document.querySelector(`#card-${recordId}`);

    // Modificar el contenido del div (por ejemplo, cambiar el título)
    if (card) {
      // Cambiar el atributo "action" del formulario
      document.getElementById("form-event").action = "update_event.php";

      // Cambiar el texto del h2
      document.getElementById("h2-form").textContent = "Editar elemento";

      const title = card.querySelector("h3");
      const description = card.querySelector("p");
      const date = card.querySelector("h4");

      // Convertir la fecha al formato YYYY-MM-DD
      const dateParts = date.textContent.split("-"); // Dividir la fecha por "/"
      const formattedDate = `${dateParts[2]}-${dateParts[1]}-${dateParts[0]}`; // Reordenar partes

      document.getElementById("id-input").value = recordId;
      document.getElementById("title-input").value = title.textContent;
      document.getElementById("description-input").value =
        description.textContent;

      // Asignar la fecha convertida al campo de fecha
      document.getElementById("date-input").value = formattedDate;

      document.getElementById("save").classList.add("hidden-btn");
      document.getElementById("update").classList.remove("hidden-btn");
      background.classList.remove("hidden");
    }
  });
});
