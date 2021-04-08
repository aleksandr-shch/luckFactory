<?php


namespace App;


abstract class AbstractPlayer
{
    /**
     * Take another card?
     * @return bool
     */
    abstract public function takeAnotherCard(): bool;

    /**
     * Player name
     * @var string
     */
    private string $name;

    /**
     * Cards deck
     * @var Deck
     */
    protected Deck $deck;

    protected function cardTaken()
    {

    }

    /**
     * AbstractPlayer constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->deck = new Deck();
    }

    /**
     * @param Card $card
     * @return $this
     */
    public function takeCard(Card $card): self
    {
        $this->deck->addCard($card);
        $this->cardTaken();
        return $this;
    }

    /**
     * Get player name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Player cards score
     * @return int
     */
    public function getScore(): int
    {
        return $this->deck->score();
    }
}