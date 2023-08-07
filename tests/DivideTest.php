<?php

namespace App;

use PHPUnit\Framework\TestCase;

class DivideTest extends TestCase
{
    public function testDivisionWorks()
    {
        $divide = new Divide(6, 3);
        $this->assertEquals(2, $divide->calculate());
    }

    public function testDivisionByZero()
    {
        $divide = new Divide(2, 0);
        $this->assertEquals(0, $divide->calculate());
    }

    public function testSecondNumberIsTwo()
    {
        $divide = new Divide(2, 3);
        $this->assertEquals(3, $divide->getSecondNumber());
    }
}