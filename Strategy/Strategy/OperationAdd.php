<?php
namespace Strategy\Strategy;

use Strategy\Interfaces\Strategy;

class OperationAdd implements Strategy
{

    public function operation($num1, $num2)
    {
        return $num1 + $num2;
    }
}