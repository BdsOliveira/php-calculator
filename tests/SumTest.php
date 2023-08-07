<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    public function testSumWorks()
    {
        $sum = new Sum(2, 2);
        $this->assertEquals(4, $sum->calculate());
    }

    public function testSecondNumberIsFuor()
    {
        $sum = new Sum(2, 4);
        $this->assertEquals(4, $sum->getSecondNumber());
    }
}