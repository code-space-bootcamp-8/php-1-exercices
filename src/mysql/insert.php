<?php

$server = 'localhost';
$user = 'user';
$password = 'pass';
$database = 'basededatos';

try {
  $conexion = new PDO("mysql:host=$server; dbname=$database", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = "INSERT INTO productos VALUES(null, 'Pan', 0.50)";
  $conexion->exec($query);

  echo "Producto creado.";
  $productId = $conn->lastInsertId();
  echo "El id del producto insertado es: " . $productId;
} catch(PDOException $e) {
    echo "Error: " . $sql . "<br>" . $e->getMessage();
}

// Una vez terminado, cerramos la conexión
$conexion = null;