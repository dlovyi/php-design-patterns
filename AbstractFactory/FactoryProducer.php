<?php
namespace AbstractFactory;

use AbstractFactory\Factory\ShapeFactory;
use AbstractFactory\Factory\ColorFactory;
use AbstractFactory\Factory\AbstractFactory;

class FactoryProducer
{

    public static function getFactory($type = 'Shape'): AbstractFactory
    {
        if ($type == 'Shape') {
            return new ShapeFactory();
        } else {
            return new ColorFactory();
        }
    }
}