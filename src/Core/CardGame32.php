<?php

namespace App\Core;

use phpDocumentor\Reflection\Types\This;

/**
 * Class CardGame32 : un jeu de cartes.
 * @package App\Core
 */
class CardGame32
{
    const ORDERS_COLORS = ['trefle' => 4, 'coeur' => 3, 'pique' => 2, 'carreau' => 1];
    const ORDERS_CARDS = ['roi' => 8, 'dame' => 7, 'valet' => 6, '10' => 5, '9' => 4, '8' => 3, '7' => 2, 'as' => 1];
    /**
     * @var $cards array a array of Cards
     */
    private $cards;

    /**
     * Guess constructor.
     * @param array $cards
     */
    public function __construct(array $cards)
    {
        $this->cards = $cards;
    }

    // Creation d'un jeu de carte de 32 cartes (d'as de carreau -> roi de trefle)
    public static function factoryCardGame32(): CardGame32
    {
        // TODO création d'un jeu de 32 cartes

        $cardGame = new CardGame32([new Card('as', 'carreau'), new Card('as', 'pique'), new Card('as', 'coeur'), new Card('as', 'trefle'),
            new Card('7','carreau'), new Card('7','pique'), new Card('7','coeur'), new Card('7','trefle'),
            new Card('8','carreau'), new Card('8','pique'), new Card('8','coeur'), new Card('8','trefle'),
            new Card('9','carreau'), new Card('9','pique'), new Card('9','coeur'), new Card('9','trefle'),
            new Card('10','carreau'), new Card('10','pique'), new Card('10','coeur'), new Card('10','trefle'),
            new Card('valet','carreau'), new Card('valet','pique'), new Card('valet','coeur'), new Card('valet','trefle'),
            new Card('dame','carreau'), new Card('dame','pique'), new Card('dame','coeur'), new Card('dame','trefle'),
            new Card('roi','carreau'), new Card('roi','pique'), new Card('roi','coeur'), new Card('roi','trefle'),]);

        return $cardGame;
    }

    /**
     * Brasse le jeu de cartes
     */
    public function shuffle()
    {
        shuffle($this->cards);
    }

    /**
     * Remet en ordre le jeu de carte
     */
    public function usort()
    {
        usort($this->cards, '\App\Core\CardGame32::compare');
    }

    // TODO ajouter une méthode reOrder qui remet le paquet en ordre

    /** définir une relation d'ordre entre instance de Card.
     * à valeur égale (name) c'est l'ordre de la couleur qui prime
     * coeur > carreau > pique > trèfle
     * Attention : si AS de Coeur est plus fort que AS de Trèfle,
     * 2 de Coeur sera cependant plus faible que 3 de Trèfle
     *
     *  Remarque : cette méthode n'est pas de portée d'instance (static)
     *
     * @see https://www.php.net/manual/fr/function.usort.php
     *
     * @param $c1 Card
     * @param $c2 Card
     * @return int
     * <ul>
     *  <li> zéro si $c1 et $c2 sont considérés comme égaux </li>
     *  <li> -1 si $c1 est considéré inférieur à $c2</li>
     * <li> +1 si $c1 est considéré supérieur à $c2</li>
     * </ul>
     *
     */
    public static function compare(Card $c1, Card $c2): int
    {

        $c1Name = strtolower($c1->getName());
        $c2Name = strtolower($c2->getName());
        $c1Color = strtolower($c1->getColor());
        $c2Color = strtolower($c2->getColor());

        if ($c1Name === $c2Name) {
            if ($c1Color === $c2Color) {
                return 0;
            }
            return (self::ORDERS_COLORS[$c1Color] > self::ORDERS_COLORS[$c2Color]) ? +1 : -1;
        }

        return (self::ORDERS_CARDS[$c1Name] > self::ORDERS_CARDS[$c2Name]) ? +1 : -1;
    }

    // Prend une carte dans le jeu de 32 cartes crée avec la fonction
    public function getCard(): Card
    {
        $index = array_rand($this->cards);
        return $this->cards[$index];
    }

    public function __toString()
    {
        return 'CardGame32 : ' . count($this->cards) . ' carte(s)';
    }

}



