<?php

namespace App;

class Sum {

    public function __construct(
        private ?float $firstNumber,
        private ?float $secondNumber,
    ) {
    }

    public function calculate(): float
    {
        return $this->firstNumber + $this->secondNumber;
    }

    public function getSecondNumber(): float
    {
        return $this->secondNumber;
    }
}