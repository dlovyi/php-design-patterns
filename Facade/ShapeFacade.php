<?php
namespace Facade;

use Facade\Shape\Rectangle;
use Facade\Shape\Circle;
use Facade\Shape\Square;

class ShapeFacade
{

    protected $rectangle;

    protected $circle;

    protected $square;

    public function shapeMaker()
    {
        $this->rectangle = new Rectangle();
        $this->circle = new Circle();
        $this->square = new Square();
    }

    public function drawRectangle()
    {
        $this->rectangle->draw();
    }

    public function drawCircle()
    {
        $this->circle->draw();
    }

    public function drawSquare()
    {
        $this->square->draw();
    }
}