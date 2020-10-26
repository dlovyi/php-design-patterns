<?php
namespace Bridge\Substance;

use Bridge\interfaces\DrawAPI;

abstract class Shape
{

    protected $drawAPI = null;

    public function __construct(DrawAPI $drawAPI)
    {
        $this->drawAPI = $drawAPI;
    }

    abstract public function draw($raduis, $x, $y);
}