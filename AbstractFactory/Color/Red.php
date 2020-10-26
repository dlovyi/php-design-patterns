<?php
namespace AbstractFactory\Color;

use AbstractFactory\Interfaces\ColorInterface;

class Red implements ColorInterface
{

    public function color()
    {
        return "red";
    }
}