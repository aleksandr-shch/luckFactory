<?php


namespace App;


class Deck
{

    /**
     * @var Card[] Cards
     */
    private array $cards = [];

    /**
     * Deck constructor.
     * @param Card[] $cards
     */
    public function __construct(array $cards = [])
    {
        $this->cards = $cards;
    }

    /**
     * Shuffle cards
     * @return $this
     */
    public function shuffle(): self
    {
        shuffle($this->cards);
        return $this;
    }

    /**
     * @param Card $card
     * @return $this
     */
    public function addCard(Card $card): Deck
    {
        array_push($this->cards, $card);
        return $this;
    }

    /**
     * Pick card from deck
     * @return Card
     */
    public function pickCard(): Card
    {
        return array_shift($this->cards);
    }

    /**
     * Cards score
     * @return int
     */
    public function score(): int
    {
        $score = 0;
        foreach ($this->cards as $card) {
            $score += $card->getValue();
        }

        return $score;
    }

    /**
     * Cards count
     * @return int
     */
    public function count(): int
    {
        return count($this->cards);
    }
}