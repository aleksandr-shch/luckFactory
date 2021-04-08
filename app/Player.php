<?php


namespace App;


class Player extends AbstractPlayer
{
    const CHOICE_YES = 'yes';
    const CHOICE_NO = 'no';

    protected Console $console;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->console = new Console();
    }

    public function cardTaken()
    {
        $this->console->info("You picked {$this->deck->count()}. Your score is {$this->deck->score()}.");
    }

    public function takeAnotherCard(): bool
    {
        $choice = $this->console->choice("Pick a card?", [
            static::CHOICE_YES,
            static::CHOICE_NO,
        ]);

        if ($choice === static::CHOICE_NO) {
            return false;
        }

        return true;
    }
}