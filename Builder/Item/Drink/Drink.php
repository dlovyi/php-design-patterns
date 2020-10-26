<?php
namespace Builder\Item\Drink;

use Builder\Item\Item;
use Builder\Packing\Bottle;

class Drink extends Item
{

    public function name()
    {
        return "Drink";
    }

    public function packing()
    {
        return new Bottle();
    }

    public function price()
    {
        return 0;
    }
}