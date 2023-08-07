<?php

namespace App;

interface BasicOperationInterface {
    public function calculate(): float|string;
    public function getSecondNumber(): float;
}