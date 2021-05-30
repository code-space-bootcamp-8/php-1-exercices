<?php

// Variables primitivas
$string = "cadena de texto";
$integer = 27;
$float = 22.83;
$bool = false;

// Constantes
define("OBJETO", "Soy una tetera");
const OTRO_OBJETO = "Soy un cucharón";

// Arrays
$array = array('dato', 5, 21.2, true);  // Sintaxis antigua
$array2 = ['dato', 5, 21.2, true];      // Sintaxis PHP 5.4
$array_asociativo = [
  'nombre' => 'Carlos',
  'apellidos' => 'Herrera Conejero',
  'telefono' => '600123456',
  'email' => 'carlos@correo.com',
  'ciudad' => 'Málaga'
];