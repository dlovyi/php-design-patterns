<?php
namespace Facade\Shape;

use Facade\Interfaces\Shape;

class Square implements Shape
{
    
    public function draw()
    {
        echo "Draw Square<br/>";
    }
}