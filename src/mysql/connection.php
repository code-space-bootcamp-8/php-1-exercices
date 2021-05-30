<?php

// datos del servidor:
$servidor = 'localhost';
$usuario = 'user';
$clave = 'pass';

// conexión a la base de datos:
$conexion = new PDO("mysql:host=$servidor; dbname=basededatos", $usuario, $clave);
echo "conexión realizada con éxito";

// Realizar las consultas SQLs que se necesiten

// Una vez terminado, cerramos la conexión
$conexion = null;