<?php
namespace Flyweight\Factory;

use Flyweight\Shape\Circle;

class ShapFactory
{
    private static $obj = [];

    public static function getCircle($color = "red")
    {
        if (! isset(self::$obj[$color])) {
            echo "Create Circle. Color: $color <br/>";
            self::$obj[$color] = new Circle($color);
        }
        return self::$obj[$color];
    }
}