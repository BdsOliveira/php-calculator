<?php

namespace App;

class Divide {

    public function __construct(
        private ?float $firstNumber,
        private ?float $secondNumber,
    ) {
    }

    public function calculate(): float 
    {
        if ($this->secondNumber == 0) return 0;
        return $this->firstNumber / $this->secondNumber;
    }

    public function getSecondNumber(): float
    {
        return $this->secondNumber;
    }
}