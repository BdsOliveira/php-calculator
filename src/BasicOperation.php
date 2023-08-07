<?php

namespace App;

include 'src/BasicOperationInterface.php';
include 'src/Sum.php';
include 'src/Subtract.php';
include 'src/Multiply.php';
include 'src/Divide.php';

class BasicOperation implements BasicOperationInterface {

    public function __construct(
        private ?float $firstNumber,
        private ?float $secondNumber,
        private ?string $operation,
    ) {
    }

    public function calculate(): float|string
    {
        switch ($this->operation) {
            case 'add':
                $result = new Sum($this->firstNumber, $this->secondNumber);
                return $result->calculate();
                break;
            case 'sub':
                $result = new Subtract($this->firstNumber, $this->secondNumber);
                return $result->calculate();
                break;
            case 'mult':
                $result = new Multiply($this->firstNumber, $this->secondNumber);
                return $result->calculate();
                break;
            case 'divi':
                $result = new Divide($this->firstNumber, $this->secondNumber);
                return $result->calculate();
                break;
            default:
                $result = 0;
                return $result;
        }
    }

    function getSecondNumber(): float
    {
        return $this->secondNumber;
    }
}