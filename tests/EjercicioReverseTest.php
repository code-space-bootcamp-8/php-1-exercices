<?php 

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

require_once('./src/ejercicios.php');

final class EjercicioReverseTest extends TestCase
{
  // Programar varias funciones que realizen lo siguiente
  public function testReverseString(): void
  {
    $input = "Hola qué tal";
    $expectedOutput = "lat éuq aloH";
    assertEquals($expectedOutput, reverseString($input));
  }

  public function testReverseWords(): void
  {
    $input = "Hola qué tal";
    $expectedOutput = "tal qué Hola";
    assertEquals($expectedOutput, reverseWords($input));
  }

  public function testReverseCharactersInWords(): void
  {
    $input = "Hola qué tal";
    $expectedOutput = "aloH éuq lat";
    assertEquals($expectedOutput, reverseCharactersInWords($input));
  }
}