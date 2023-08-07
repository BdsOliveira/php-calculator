<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SubtractTest extends TestCase
{
    public function testSubtractionWorks()
    {
        $subtraction = new Subtract(2, 2);
        $this->assertEquals(0, $subtraction->calculate());
    }

    public function testSecondNumberIsFive()
    {
        $subtraction = new Subtract(2, 5);
        $this->assertEquals(5, $subtraction->getSecondNumber());
    }
}