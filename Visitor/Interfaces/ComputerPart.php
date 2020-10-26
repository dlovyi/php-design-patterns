<?php
namespace Visitor\Interfaces;

interface ComputerPart
{
    public function accept(ComputerPartVisitor $visitor);
}