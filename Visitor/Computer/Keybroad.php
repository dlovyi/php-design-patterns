<?php
namespace Visitor\Computer;

use Visitor\Interfaces\ComputerPart;
use Visitor\Interfaces\ComputerPartVisitor;

class Keybroad implements ComputerPart
{
    public $brand = "GJ-1000";

    public function accept(ComputerPartVisitor $visitor)
    {
        $visitor->visitorKeybroad($this);
    }
}