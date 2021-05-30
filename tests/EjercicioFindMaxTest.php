<?php 

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

require_once('./src/ejercicios.php');

final class EjercicioFindMaxTest extends TestCase
{
  // Programar una función que devuelva el número mayor de un array
  public function testFindMaxTodosPositivos(): void
  {
    
    $input = [6, 2, 17, 9];
    assertEquals(17, findMax($input));
  }

  public function testFindMaxMezclaPositivosNegativos(): void
  {
    $input = [-6, 9, -17, 2];
    assertEquals(9, findMax($input));
  }

  public function testFindMaxConTodosNegativos(): void
  {
    $input = [-6, -2, -17, -9];
    assertEquals(-2, findMax($input));
  }

  public function testFindMaxCuandoElMayorEsElPrimero(): void
  {
    $input = [13, 2, -17, 1];
    assertEquals(13, findMax($input));
  }

  public function testFindMaxCuandoElMayorEsElÚltimo(): void
  {
    $input = [1, 2, -17, 13];
    assertEquals(13, findMax($input));


    $input = [8];
    assertEquals(8, findMax($input));

  }

  public function testFindMaxConElMayorRepetido(): void
  {
    $input = [1, 13, 13, 8];
    assertEquals(13, findMax($input));
  }

  public function testFindMaxConUnArrayDeUnSoloNumero(): void
  {
    $input = [8];
    assertEquals(8, findMax($input));
  }
}