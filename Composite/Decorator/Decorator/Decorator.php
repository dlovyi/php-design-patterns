<?php
namespace Decorator\Decorator;

use Decorator\Interfaces\Component;

abstract class Decorator implements Component
{

    protected $time = 0;

    protected $cmp = null;

    public function __construct(Component $cmp)
    {
        $this->cmp = $cmp;
    }

    public function operation()
    {
        $this->cmp->operation();
        $this->behavior();
    }

    public function getTime()
    {
        return $this->time;
    }
}