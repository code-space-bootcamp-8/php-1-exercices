<?php 

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

require_once('./src/ejercicios.php');

final class EjercicioSumArrayTest extends TestCase
{
  // Programar un método que sume todos los elementos de un array y devuelva el resultado
  public function testSumArray(): void
  {
    $input = [3, 6, 1, -5, 0, 4];
    assertEquals(9, sumArray($input));
  }
}