<?php 

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

require_once('./src/ejercicios.php');

final class EjercicioAgeAverageTest extends TestCase
{
  // Programar un método que calcule la media de las edades de un array de personas
  public function testAverageAge(): void
  {
    $people = [
      ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 30, 'city' => 'Benalmádena'],
      ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 25, 'city' => 'Fuengirola'],
      ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 35, 'city' => 'Torremolinos'],
      ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 38, 'city' => 'Málaga'],
    ]; 

    assertEquals(32, averageAge($people));
  }
}