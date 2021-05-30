<?php

class Archer {
  private string $name;
  private int $attack;
  private int $shield;
  private int $lifePoints;

  public function __construct(string $name) {
    $this->name = $name;
    $this->attack = 5;
    $this->shield = 1;
    $this->lifePoints = 13;
  }

  public function getName(): string {
    return $this->name;
  }

  public function attack($enemy): void {
    // ...
  }

  public function healSelf($healPoints) {
    $this->lifePoints += $healPoints;
  }
}