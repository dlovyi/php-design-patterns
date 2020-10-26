<?php
namespace AbstractFactory\Factory;

class ColorFactory extends AbstractFactory
{

    public function getColor($color = '')
    {
        $class = "AbstractFactory\\Color\\" . $color;
        return new $class();
       
    }

    public function getShape($shape = '')
    {
        return null;
    }
}