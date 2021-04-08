<?php


namespace App;


class Game
{
    /**
     * Players
     * @var AbstractPlayer[]
     */
    private array $players = [];

    /**
     * Deck
     * @var Deck
     */
    private Deck $deck;

    /**
     * @var Console
     */
    private Console $console;

    /**
     * Game constructor.
     * @param Deck $deck
     * @param Player[] $players
     */
    public function __construct(Deck $deck, array $players)
    {
        $this->deck = $deck;

        $this->console = new Console();

        foreach ($players as $player) {
            $this->addPlayer($player);
        }
    }

    /**
     * Add player to the game
     * @param AbstractPlayer $player
     * @return $this
     */
    public function addPlayer(AbstractPlayer $player): self
    {
        array_push($this->players, $player);
        return $this;
    }

    /**
     * Run game
     */
    public function run()
    {
        $this->console->info("Game started!");

        $this->deck->shuffle();

        foreach ($this->players as $player) {

            $this->console->info("{$player->getName()} is picking cards");

            do {
                $card = $this->deck->pickCard();
                $player->takeCard($card);
            } while ($player->takeAnotherCard());


        }

        foreach ($this->players as $player) {
            print $player->getName() . ": " . $player->getScore() . "\n";
        }
    }
}