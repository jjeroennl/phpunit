<?php
    class Autoload{
        function __construct(){


            foreach (glob("src/*.php") as $filename)
            {
                include $filename;
            }

            foreach (glob("tests/*.php") as $filename)
            {
                include $filename;
            }


        }
    }
?>
