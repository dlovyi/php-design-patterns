<?php
namespace Visitor\Computer;

use Visitor\Interfaces\ComputerPart;
use Visitor\Interfaces\ComputerPartVisitor;

class Monitor implements ComputerPart
{
    public $brand = "DELL-1000";

    public function accept(ComputerPartVisitor $visitor)
    {
        $visitor->visitorMonitor($this);
    }
}