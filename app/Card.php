<?php

namespace App;

class Card
{
    /**
     * Card label
     * @var string
     */
    private string $label;

    /**
     * Card value
     * @var int
     */
    private int $value;

    /**
     * Card constructor.
     * @param $label
     * @param $value
     */
    public function __construct($label, $value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get card label
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Get card value
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
}