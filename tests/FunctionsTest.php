<?php 

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

require('./src/functions/functions.php');

final class FunctionsTest extends TestCase
{
    public function testNamedFunction(): void
    {
      $output1 = call('Carlos');
      assertEquals("Por favor, Carlos, acuda a recepción.", $output1);

      $output2 = call('Carmen');
      assertEquals("Por favor, Carmen, acuda a recepción.", $output2);
    }

    public function testAnonymousFunction(): void
    {
      $square = function(int $number): int {
        return $number * $number;
      };

      assertEquals(25, $square(5));
      assertEquals(100, $square(10));
    }

    public function testArrowFunction(): void
    {
      $number = 20;
      // las funciones de flecha retornan un valor, hacen uso global de las
      // variables y se ejecutan en una sola línea:
      $square = fn() => $number * $number;

      assertEquals(400, $square());
    }

    public function testArrowFunction2(): void
    {
      $square = fn(int $n): int => $n * $n;

      assertEquals(25, $square(5));
    }

    public function testDefaultValues(): void
    {
      assertEquals(18, add(11, 7));
      assertEquals(12, add(11));
    }

    public function testPassByReference(): void
    {
      $number = 40;
      addFive($number);
      
      assertEquals(45, $number);
    }
}