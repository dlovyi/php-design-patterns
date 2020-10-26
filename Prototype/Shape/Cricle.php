<?php
namespace Prototype\Shape;

class Cricle extends Shape
{

    private $id = null;

    public $type = 'Cricle';

    public function getType()
    {
        return $this->type;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function draw()
    {
        var_dump("Inside Cricle::draw() method.");
    }
}