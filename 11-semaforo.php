<?php

echo "Ingrese un número o una letra para representar el color del semáforo: ";
$color = trim(fgets(STDIN));

function imprimirMensaje($color) {
  switch (strtolower($color)) {
    
    case 'rojo':
    case '1':
      echo "¡Pare!";
      break;

    case 'amarillo':
    case '2':
      echo "¡Espera!";
      break;

    case 'verde':
    case '3':
      echo "¡Avanza!";

      break;
    default:
      echo "Color no válido.";
  }
}

imprimirMensaje($color);

?>