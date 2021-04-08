<?php

require_once './vendor/autoload.php';

$cardsDenomination = [
    '2' => 2,
    '3' => 3,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 7,
    '8' => 8,
    '9' => 9,
    '10' => 10,
    'J' => 11,
    'Q' =>  11,
    'K' =>  11,
    'A' => 1,
];

$deck = \App\DeckFactory::make($cardsDenomination);

$playerOne = new \App\ComputerPlayer("Computer");
$playerTho = new \App\Player("Alexander");

$game = new \App\Game($deck, [
    $playerOne,
    $playerTho,
]);

$game->run();