<?php


namespace App;


class Console
{
    public function info(string $message)
    {
        echo $message . PHP_EOL;
    }


    public function choice(string $question, array $variants)
    {
        $variantsString = implode("/", $variants);
        $this->info("{$question} ({$variantsString})");

        $choice = readline();

        while (!in_array($choice, $variants)) {
            $this->info("please type {$variantsString}");
            $choice = readline();
        }

        return $choice;
    }
}