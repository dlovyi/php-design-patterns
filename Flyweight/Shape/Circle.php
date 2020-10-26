<?php
namespace Flyweight\Shape;

use Facade\Interfaces\Shape;

class Circle implements Shape
{

    protected $x;

    protected $y;

    protected $r;

    protected $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setR($r)
    {
        $this->r;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function draw()
    {
        echo "drawing Circle. Color: $this->color, radius:  $this->r, x:$this->x, y:$this->y <br/>";
    }
}