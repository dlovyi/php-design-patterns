<?php
namespace Builder;

use Builder\Item\Item;

/**
 * �����
 *
 * @author DELL
 *        
 */
class Meal
{

    private $itemList = [];

    /**
     * 增加商品
     *
     * @param Item $item            
     */
    public function addItem(Item $item)
    {
        $this->itemList[] = $item;
    }

    /**
     * 计算价格
     *
     * @return number
     */
    public function getPrice()
    {
        $price = 0;
        if (! empty($this->itemList)) {
            foreach ($this->itemList as $k => $v) {
                $price += $v->price();
            }
        }
        
        echo "TotalPrice:" . $price . "<br/>";
        return $price;
    }

    /**
     * 显示商品
     */
    public function showItems()
    {
        if (! empty($this->itemList)) {
            foreach ($this->itemList as $k => $v) {
                echo "itemName:" . $v->name() . "<br/>";
                echo "Pcaking:" . $v->packing()->packing() . "<br/>";
                echo "Price:" . $v->price() . "<br/>";
            }
        }
    }
}