<?php


namespace App;


class DeckFactory
{
    public static function make(array $cardsDenomination)
    {
        $cards = [];

        foreach ($cardsDenomination as $key => $value) {
            $card = new Card($key, $value);
            $cards = array_merge($cards, array_fill(0, 4, $card));
        }

        return new Deck($cards);
    }
}