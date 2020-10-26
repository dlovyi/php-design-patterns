<?php
namespace Bridge\Substance;

class Circle extends Shape
{

    private $x = 0;

    private $y = 0;

    private $radius = 0;

    public function draw($radius, $x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
        
        $this->drawAPI->drawCircle($radius, $x, $y);
    }
}