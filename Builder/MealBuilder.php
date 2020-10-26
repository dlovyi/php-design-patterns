<?php
namespace Builder;

use Builder\Item\Burger\VegetableBurger;
use Builder\Item\Drink\Pepsl;
use Builder\Item\Burger\ChickBurger;
use Builder\Item\Drink\Coca;

/**
 * 点餐建造器类
 *
 * @author DELL
 *        
 */
class MealBuilder
{

    public function preparVegMeal()
    {
        $meal = new Meal();
        
        $meal->addItem(new VegetableBurger());
        $meal->addItem(new Pepsl());
       
        return $meal;
    }

    public function preparChkMeal()
    {
        $meal = new Meal();
        
        $meal->addItem(new ChickBurger());
        $meal->addItem(new Coca());
        
        return $meal;
    }

    public function preparBigMeal()
    {
        $meal = new Meal();
        
        $meal->addItem(new VegetableBurger());
        $meal->addItem(new Pepsl());
        $meal->addItem(new ChickBurger());
        $meal->addItem(new Coca());
       
        return $meal;
    }
}