<?php
namespace Builder\Item\Burger;

/**
 * ���⺺��
 * 
 * @author DELL
 *        
 */
class ChickBurger extends Burger
{

    public function name()
    {
        return "ChickBurger";
    }

    public function price()
    {
        return 15;
    }
}