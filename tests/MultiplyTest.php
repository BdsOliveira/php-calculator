<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MultiplyTest extends TestCase
{
    public function testMultiplicationWorks()
    {
        $multiply = new Multiply(2, 2);
        $this->assertEquals(4, $multiply->calculate());
    }

    public function testSecondNumberIsSeven()
    {
        $multiply = new Multiply(2, 7);
        $this->assertEquals(7, $multiply->getSecondNumber());
    }
}