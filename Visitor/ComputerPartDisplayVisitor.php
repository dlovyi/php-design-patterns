<?php
namespace Visitor;

use Visitor\Interfaces\ComputerPartVisitor;
use Visitor\Interfaces\ComputerPart;

class ComputerPartDisplayVisitor implements ComputerPartVisitor
{

    public function visitorComputer(ComputerPart $part)
    {
        var_dump("Displaying Computer." . $part->brand);
    }

    public function visitorKeybroad(ComputerPart $part)
    {
        var_dump("Displaying Keyboard." . $part->brand);
    }

    public function visitorMouse(ComputerPart $part)
    {
        var_dump("Displaying Mouse." . $part->brand);
    }

    public function visitorMonitor(ComputerPart $part)
    {
        var_dump("Displaying Monitor." . $part->brand);
    }
}