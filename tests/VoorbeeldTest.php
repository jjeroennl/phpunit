<?php
class VoorbeeldTest extends PHPUnit_Framework_TestCase
{
    private $test;

    public function __construct()
    {
        $this->test = new Voorbeeld();
    }

    public function testAdd()
    {
        //2+2 = 4
        $this->assertEquals(4, $this->test->add(2, 2));
        //10 + -30 = -20
        $this->assertEquals(-20, $this->test->add(10, -30));
    }

    public function testSubtract()
    {
        //4-2 = 2
        $this->assertEquals(2, $this->test->subtract(4, 2));
        //10 - 50 = -40
        $this->assertEquals(-40, $this->test->subtract(10, 50));
    }

    public function testDivide()
    {
        //10/2 = 5
        $this->assertEquals(5, $this->test->divide(10, 2));
        //60/0 = error
        //werkt niet onder deze versie van PHP Unit
        // $this->expectException($this->test->divide(60, 0));
    }
}
