<?php
namespace State\State;

use State\Interfaces\State;
use State\Content;

class StopState implements State
{

    public function doAction(Content $content)
    {
        var_dump("Player is in Stop state");
        $content->setState($this);
    }

    public function __toString()
    {
        return "Stop State";
    }
}