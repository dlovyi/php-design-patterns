<?php
namespace Prototype\Shape;

class Squrae extends Shape
{

    private $id = null;

    public $type = 'Squrae';

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
        var_dump("Inside Squrae::draw() method.");
    }
}