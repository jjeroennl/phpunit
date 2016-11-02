<?php
    class Autoload{
        function __construct(){


            foreach (glob("src/*.php") as $filename)
            {
                include $filename;
                echo $filename . "\n";

            }

            foreach (glob("tests/*.php") as $filename)
            {
                include $filename;
                echo $filename . "\n";;
            }


        }
    }

    new Autoload();
?>
