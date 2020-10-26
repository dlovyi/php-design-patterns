<?php
namespace Prototype\Shape;

class Renctangle extends Shape
{

    private $id = null;

    public $type = 'Renctangle';

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
        var_dump("Inside Renctangle::draw() method.");
    }
}