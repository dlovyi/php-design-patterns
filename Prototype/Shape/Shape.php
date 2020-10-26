<?php
namespace Prototype\Shape;

abstract class Shape
{

    private $id = null;

    private $cloneCount = 0;

    public $type = '';

    abstract public function getType();

    abstract public function getId();

    abstract public function setId($id);

    abstract public function draw();

    public function __clone()
    {
        $this->cloneCount ++;
    }

    // public function incrCloneCount()
    // {
    // $this->cloneCount ++;
    // }
    
    public function getCloneCount()
    {
        var_dump("clone times:" . $this->cloneCount);
        return $this->cloneCount;
    }
}