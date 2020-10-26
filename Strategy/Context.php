<?php
namespace Strategy;

class Context
{

    protected $strategy;

    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy($num1, $num2)
    {
        return $this->strategy->operation($num1, $num2);
    }
}