<?php

namespace App\Personnage;

abstract class AbstractPersonnage
{
  // Attribut protégé :
  // Inaccessible de l'extérieur
  // Accessible par les classes héritant de Personnage
  protected $health;

  public function getHealth(): int
  {
    return $this->health;
  }

  public function setHealth(int $health): self
  {
    if ($health < 0) {
      $this->health = 0;
    } else {
      $this->health = $health;
    }
    // $this->health = ($health < 0) ? 0 : $health;

    return $this;
  }

  public abstract function calculeDegats(): int;

  public function attack(AbstractPersonnage $target)
  {
    $degats = $this->calculeDegats();
    // Points de vie restants de l'adversaire
    $targetHealth = $target->getHealth();
    // Points de vie après applications des dégâts
    $targetNewHealth = $targetHealth - $degats;
    // Affectation des nouveaux points de vie à la cible
    $target->setHealth($targetNewHealth);
  }
}