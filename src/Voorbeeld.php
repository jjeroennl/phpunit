<?php
class Voorbeeld
{
    public function add($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function subtract($n1, $n2)
    {
        return $n1 - $n2;
    }

    public function divide($n1, $n2)
    {
        if ($n1 != 0 || $n2 != 0) {
            return ($n1 / $n2);
        } else {
            throw new Exception('Kan niet delen door nul');
        }
    }

    public function times($n1, $n2)
    {
        return $n1 * $n2;
    }
}
