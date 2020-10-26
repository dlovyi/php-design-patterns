<?php
namespace Visitor\Computer;

use Visitor\Interfaces\ComputerPart;
use Visitor\Interfaces\ComputerPartVisitor;

class Computer implements ComputerPart
{

    public $brand = "DELL-G3";

    protected $part = [];

    public function __construct()
    {
        $this->part = [
            new Keybroad(),
            new Mouse(),
            new Monitor()
        ];
    }

    public function accept(ComputerPartVisitor $visitor)
    {
        if (! empty($this->part)) {
            foreach ($this->part as $k => $part) {
                $part->accept($visitor);
            }
        }
        $visitor->visitorComputer($this);
    }
}