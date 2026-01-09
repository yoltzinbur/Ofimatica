// Obtener los elementos del modal
const modal = document.getElementById("imageModal");
const modalImage = document.getElementById("modalImage");
const closeButton = document.getElementsByClassName("close-button")[0];

// Función para abrir el modal
function openModal(imageSrc) {
  modal.style.display = "flex"; // Usamos 'flex' para centrar la imagen
  modalImage.src = imageSrc;
  document.body.style.overflow = "hidden"; // Evita el scroll en el body cuando el modal está abierto
}

// Función para cerrar el modal
function closeModal() {
  modal.style.display = "none";
  document.body.style.overflow = "auto"; // Restaura el scroll en el body
}

// Cierra el modal si se hace clic fuera de la imagen (en el fondo oscuro)
window.onclick = function(event) {
  if (event.target == modal) {
    closeModal();
  }
};

// Opcional: Cierra el modal con la tecla 'Escape'
document.addEventListener('keydown', function(event) {
  if (event.key === "Escape" && modal.style.display === "flex") {
    closeModal();
  }
});

// Nota: El "close-button" ya tiene un onclick="closeModal()" en el HTML.