<?php
namespace Memento;

/**
 * 备忘录类
 * 
 * @author DELL
 *        
 */
class Memento
{

    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}