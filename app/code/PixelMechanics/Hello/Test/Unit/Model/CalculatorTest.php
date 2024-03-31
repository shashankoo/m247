<?php
//Create unit test for class PixelMechanics/Hello/Test/Unit/Model/Calculator.php
namespace PixelMechanics\Hello\Test\Unit\Model;

use PHPUnit\Framework\TestCase;
use PixelMechanics\Hello\Model\Calculator;

class CalculatorTest extends TestCase
{
    protected $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $this->assertEquals(4, $this->calculator->add(2, 2));
    }

    public function testSubtract()
    {
        $this->assertEquals(2, $this->calculator->subtract(4, 2));
    }

    public function testMultiply()
    {
        $this->assertEquals(6, $this->calculator->multiply(2, 3));
    }

    public function testDivide()
    {
        $this->assertEquals(2, $this->calculator->divide(6, 3));
    }
}
