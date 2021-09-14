<?php

namespace App\Core;

/**
 * Class Card : Définition d'une carte à jouer
 * @package App\Core
 */
class Card
{
  /**
   * @var $name string nom de la carte, comme par exemples 'As' '2' 'Reine'
   */
  private $name;

  /**
   * @var $color string couleur de la carte, par exemples 'Pique', 'Carreau'
   */
  private $color;

  /**
   * Card constructor.
   * @param string $name
   * @param string $color
   */
  public function __construct(string $name, string $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name): void
  {
    $this->name = $name;
  }

    /**
     * @return string
     */
  public function getColor() : string
  {
    return $this->color;
  }

    /**
     * @return string
     */
  public function __toString() : string 
  {
    $c1Name = strtolower($this->getName());
    $c1Color = strtolower($this->getColor());
    return $c1Name.' de '.$c1Color;
  }

}