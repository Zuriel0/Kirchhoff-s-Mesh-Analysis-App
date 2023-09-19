$(document).ready(function() {
    // Manejar el evento de cambio en el select
    $('#select-mallas').on('change', function() {
      // Obtener el valor seleccionado
      var selectedOption = $(this).val();
  
      // Remover la clase 'active' de elementos de navegación (si es necesario)
      $('.navbar-nav li').removeClass('active');
  
      // Cargar el contenido correspondiente en el elemento 'central'
      $("#central").load('view/' + selectedOption);
  
      // Prevenir el comportamiento predeterminado del evento de cambio
      return false;
    });
  });
  

function init() {
    $('.navbar-nav li').removeClass('active');
    $("#central").load('view/Dosmallas.php');
    return false;
}
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));