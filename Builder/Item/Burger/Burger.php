<?php
namespace Builder\Item\Burger;

use Builder\Item\Item;
use Builder\Packing\Wraper;

/**
 * ºº±¤¸¸Àà
 *
 * @author DELL
 *        
 */
class Burger extends Item
{

    public function name()
    {
        return "Burger";
    }

    public function packing()
    {
        return new Wraper();
    }

    public function price()
    {
        return 0;
    }
}