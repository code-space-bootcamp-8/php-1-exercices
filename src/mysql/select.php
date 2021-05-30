<?php

$server = 'localhost';
$user = 'user';
$password = 'pass';
$database = 'basededatos';

try {
  $conexion = new PDO("mysql:host=$server; dbname=$database", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("SELECT * FROM productos");
  $stmt->execute();

  $results = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($resulsts as $result) {
    print_r($result);
  }
} catch(PDOException $e) {
    echo "Error: " . $sql . "<br>" . $e->getMessage();
}

// Una vez terminado, cerramos la conexión
$conexion = null;