<?php
namespace Facade\Shape;

use Facade\Interfaces\Shape;

class Rectangle implements Shape
{

    public function draw()
    {
        echo "Draw Rectangle<br/>";
    }
}