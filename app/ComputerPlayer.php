<?php


namespace App;


class ComputerPlayer extends AbstractPlayer
{

    public function takeAnotherCard(): bool
    {
        return $this->getScore() < 18;
    }
}