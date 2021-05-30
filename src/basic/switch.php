<?php

switch($optionId){
  case (1):
    $optionText = "Leer menú";
    break;
  case (2):
    $optionText = "Editar menú";
    break;
  case (3):
    $optionText = "Eliminar menú";
    break;
  default:
    $optionText = "Opción no disponible";
    break;
}