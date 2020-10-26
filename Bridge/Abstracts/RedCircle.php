<?php
namespace Bridge\Abstracts;

use Bridge\interfaces\DrawAPI;

class RedCircle implements DrawAPI
{

    public function drawCircle($radius, $x, $y)
    {
        var_dump("drawing Circle. color: red, radius:  $radius, x:$x, y:$y ");
    }
}