<?php
namespace AbstractFactory\Shape;

use AbstractFactory\Interfaces\ShapeInterface;

class Rectangle implements ShapeInterface
{

    public function shape()
    {
        return "Rectangle";
    }
}