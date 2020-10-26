<?php
namespace Visitor\Interfaces;

interface ComputerPartVisitor
{

    public function visitorComputer(ComputerPart $part);

    public function visitorKeybroad(ComputerPart $part);

    public function visitorMouse(ComputerPart $part);

    public function visitorMonitor(ComputerPart $part);
}