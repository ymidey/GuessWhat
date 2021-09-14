<?php

namespace App\Tests\Core;

use App\Core\Card;
use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;

class CardGame32Test extends TestCase
{

    public function testToString1Card(){
        $cardGame = new CardGame32([new card ('As', 'pique')]);
        $this->assertEquals('CardGame32 : 1 carte(s)', $cardGame->__toString());
    }

    public function testToString2Cards(){
        $cardGame = new CardGame32([new card ('as', 'pique'), new card ( '2', 'coeur')]);
        $this->assertEquals('CardGame32 : 2 carte(s)', $cardGame->__toString());
    }

    public function testShuffle(){
        $cardGame = CardGame32::factoryCardGame32();
        $cardGame->shuffle();
        $cardGame2 = CardGame32::factoryCardGame32();
        $this->assertNotEquals($cardGame,$cardGame2);
    }

    public function testUSort(){
        $cardGame = CardGame32::factoryCardGame32();
        $cardGame2 = CardGame32::factoryCardGame32();
        $cardGame2->shuffle();
        $cardGame2->usort();
        $this->assertEquals($cardGame,$cardGame2);
    }




  }