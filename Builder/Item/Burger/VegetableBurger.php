<?php
namespace Builder\Item\Burger;

/**
 * �߲˺���
 * 
 * @author DELL
 *        
 */
class VegetableBurger extends Burger
{

    public function name()
    {
        return "VegetableBurger";
    }

    public function price()
    {
        return 10;
    }
}