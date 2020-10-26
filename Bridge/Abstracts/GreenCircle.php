<?php
namespace Bridge\Abstracts;

use Bridge\interfaces\DrawAPI;

class GreenCircle implements DrawAPI
{

    public function drawCircle($radius, $x, $y)
    {
        var_dump("drawing Circle. color: green, radius:  $radius, x:$x, y:$y ");
    }
}