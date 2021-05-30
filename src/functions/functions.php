<?php

function call(string $name): string {
  return "Por favor, " . $name . ", acuda a recepción.";
}

$square = function(int $number): int {
  return $number * $number;
};

$ouput = $square(5);

function add(int $a, int $b = 1): int {
  return $a + $b;
}

function addFive(int &$a): int {
  return $a += 5;
}