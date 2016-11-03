<?php
  class TestOne{
    function add($num1, $num2){
      return ($num1 + $num2);
    }

    function subtract($num1, $num2){
      return ($num1 / $num2);
    }

    function createArray(){
      return func_get_args();
    }
  }
?>
