<?php

$server = 'localhost';
$user = 'user';
$password = 'pass';
$database = 'basededatos';

try {
  $conexion = new PDO("mysql:host=$server; dbname=$database", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE productos SET price=0.55 WHERE id=5";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
    echo "Error: " . $sql . "<br>" . $e->getMessage();
}

// Una vez terminado, cerramos la conexión
$conexion = null;