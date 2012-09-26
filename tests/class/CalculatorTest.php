<?php

/**
 * Calculator Test
 */
require_once dirname(__FILE__) . '/../../class/Calculator.php';

/**
 * Test class for Calculator
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Calculator
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Calculator;
    }

    protected function tearDown()
    {

    }

    /**
     * @covers Calculator::add
     */
    public function testAdd()
    {
        $this->assertSame(2, $this->object->add(1, 1));
    }

}
