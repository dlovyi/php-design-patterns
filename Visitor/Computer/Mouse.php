<?php
namespace Visitor\Computer;

use Visitor\Interfaces\ComputerPart;
use Visitor\Interfaces\ComputerPartVisitor;

class Mouse implements ComputerPart
{
    public $brand = "GJ-150";
    
    public function accept(ComputerPartVisitor $visitor)
    {
        $visitor->visitorMouse($this);
    }
}