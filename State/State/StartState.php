<?php
namespace State\State;

use State\Interfaces\State;
use State\Content;

class StartState implements State
{

    public function doAction(Content $content)
    {
        var_dump("Player is in Start state");
        $content->setState($this);
    }
    
    
    public function __toString()
    {
        return "Start State";
    }
}