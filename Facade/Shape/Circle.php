<?php
namespace Facade\Shape;

use Facade\Interfaces\Shape;

class Circle implements Shape
{
    
    public function draw()
    {
        echo "Draw Circle<br/>";
    }
}