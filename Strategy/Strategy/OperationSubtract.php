<?php
namespace Strategy\Strategy;

use Strategy\Interfaces\Strategy;

class OperationSubtract implements Strategy
{
    
    public function operation($num1, $num2)
    {
        return $num1 - $num2;
    }
}