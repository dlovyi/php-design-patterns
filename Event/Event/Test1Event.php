<?php
namespace Event\Event;

use Event\Interfaces\StoppableEventInterface;

class Test1Event implements StoppableEventInterface
{
    
    public $obj;
    
    public function __construct($object)
    {
        $this->obj = $object;
    }
    
    public function isPropagationStopped()
    {
        return true;
    }
}