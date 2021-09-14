<?php

namespace App\Tests\Core;

use App\Core\Card;
use App\Core\CardGame32;
use App\Core\Guess;
use PHPUnit\Framework\TestCase;

class GuessTest extends TestCase
{
  public function testDefaultValueWithHelp() {
    $guess = new Guess(CardGame32::factoryCardGame32());
    $this->assertTrue($guess->getWithHelp());
  }

  public function testBonneCarte(){
      $card = new card ('as', 'pique');
      $this->assertTrue($card, Guess::isMatch($card));
  }

  public function testNull32(){
      $cardgame = new CardGame32();
      $this->assertEquals('CardGame32 : 32 carte(s)',Guess::__Construct($cardgame));
  }

}
