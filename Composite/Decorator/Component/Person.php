<?php
namespace Decorator\Component;

use Decorator\Interfaces\Component;

class Person implements Component
{

    public $time = 0;

    public function operation()
    {
        echo "到了办公室!<br/>计时开始：" . $this->time."<br/>";
    }

    public function getTime()
    {
        return $this->time;
    }
}