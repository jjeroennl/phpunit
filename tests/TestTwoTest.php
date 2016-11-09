<?php

class TestTwoTest extends PHPUnit_Framework_TestCase
{
    private $test;

    protected function setUp()
    {
        $this->test = new TestTwo();
    }

    public function testAdd()
    {
        $result = $this->test->foo('Paul', 'Bergmann');

        $this->assertEquals('Bergmann', $result);
    }
}
