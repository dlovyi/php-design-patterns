<?php
namespace Strategy\Strategy;

use Strategy\Interfaces\Strategy;

class OperationMultiply implements Strategy
{

    public function operation($num1, $num2)
    {
        return $num1 * $num2;
    }
}