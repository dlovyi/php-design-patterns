<?php
namespace Memento;

/**
 * 备忘录管理类
 *
 * @author DELL
 *        
 */
class CareTaker
{

    private $mementoList = [];

    public function add(Memento $state)
    {
        $this->mementoList[] = $state;
    }

    public function get($index)
    {
        return $this->mementoList[$index];
    }
}