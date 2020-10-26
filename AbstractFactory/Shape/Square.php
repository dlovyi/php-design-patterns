<?php
namespace AbstractFactory\Shape;

use AbstractFactory\Interfaces\ShapeInterface;

class Square implements ShapeInterface
{

    public function shape()
    {
        return "Square";
    }
}