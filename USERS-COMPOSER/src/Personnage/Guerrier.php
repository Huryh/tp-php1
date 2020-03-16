<?php


namespace App\Personnage;

class Guerrier extends AbstractPersonnage
{
  private $strength;

  public function __construct(
    int $strength,
    int $health = 100
  ) {
    $this->setHealth($health);
    $this->strength = $strength;
  }

  public function getStrength(): int
  {
    return $this->strength;
  }

  public function setStrength(int $strength): self
  {
    $this->strength = $strength;
    return $this;
  }

  public function calculeDegats(): int
  {
    return intval($this->strength / 5);
  }
}