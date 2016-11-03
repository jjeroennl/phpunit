<?php
  class TestOneTest extends PHPUnit_Framework_TestCase{
    private $Test1;

    protected function setUp()
    {
        $this->Test1 = new TestOne();
    }

    function testAdd(){
      $result = $this->Test1->add(2,5);

      $this->assertEquals(7, $result);

      $result = $this->Test1->add(6,5);

      $this->assertEquals(12, $result);
    }

  }
 ?>
