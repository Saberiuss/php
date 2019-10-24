<?php

namespace App;

use phpDocumentor\Reflection\Types\Integer;

class Calculator
{
    public function sum(int $a, int $b)
    {

        return $a + $b;
    }

    public function pow(int $a, int $b)
    {
        $x = 0;
        for ($c = 0; $c < $b; $c++) {
            $x = $this->sum($x, $a);
        }

        return $x;
    }

    public function sqrt($a, $b)
    {
        $x = 1;

        for ($c = 0; $c < $b; $c++) {
            $x = $this->pow($x, $a);

        }

        return $x;
    }


}
