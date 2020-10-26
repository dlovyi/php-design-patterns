<?php
namespace AbstractFactory\Factory;

class ShapeFactory extends AbstractFactory
{

    public function getColor($color = '')
    {
        return null;
    }

    public function getShape($shape = '')
    {
        $class = "AbstractFactory\\Shape\\" . $shape;
        return new $class();
    }
}