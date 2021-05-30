<?php 

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

require_once('./src/ejercicios.php');

final class EjercicioFilterAgeTest extends TestCase
{
  // Programar un método que devuelva un array con las personas que sean mayores o igual a una edad dada
  public function testFilterAge(): void
  {
    $people = [
      ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
      ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
      ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
      ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
    ]; 

    $output = filterAge($people, 18);

    $expectedOuput = [
      ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
      ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
    ];

    assertEquals($expectedOuput, $output);
  }

  public function testFilterAge2(): void
  {
    $people = [
      ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
      ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
      ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
      ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
    ]; 

    $output = filterAge($people, 21);

    $expectedOuput = [];

    assertEquals($expectedOuput, $output);
  }
}