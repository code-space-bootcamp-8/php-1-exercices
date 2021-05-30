<?php

$server = 'localhost';
$user = 'user';
$password = 'pass';
$database = 'basededatos';

try {
  $conexion = new PDO("mysql:host=$server; dbname=$database", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "DELETE FROM productos WHERE id=3";
  $conn->exec($sql);

  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo "Error: " . $sql . "<br>" . $e->getMessage();
}

// Una vez terminado, cerramos la conexión
$conexion = null;