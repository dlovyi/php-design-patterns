<?php
namespace Iterator;

use Iterator\Interfaces\Container;

class NameRepository implements Container
{

    public $names = [
        "Robert",
        "John",
        "Julie",
        "Lora"
    ];
    
    public function __construct($data=null)
    {
        if(!empty($data)){
            $this->names = $data;
        }
    }

    public function getIterator()
    {
        return new NameIterator($this->names);
    }
}