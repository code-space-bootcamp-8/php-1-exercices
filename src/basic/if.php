<?php


if ($coder) {
  $resultado = "Eres Coder!";
}

if ($coder) {
  $resultado = "Eres Coder!";
} else {
  $resultado = "Aprende a codear!";
}


if ($curso == "fullstack") {
  $resultado = "Eres del curso de desarrollo fullstack!";
} else if ($codespace == "java") {
  $resultado = "Eres del curso de Java";
} else {
  $resultado = "No estas registrado aún";
}


// Operador ternario
$frase = $edad >= 18 ? "Eres mayor de edad" : "Eres menor de edad";

// If alternativo
if ($curso == "fullstack"):
  $resultado = "Eres del curso de desarrollo fullstack!";
elseif ($codespace == "java"):
  $resultado = "Eres del curso de Java";
else:
  $resultado = "No estas registrado aún";
endif;

?>