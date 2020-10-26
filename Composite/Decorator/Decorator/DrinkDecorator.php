<?php
namespace Decorator\Decorator;

// use Decorator\Interfaces\Component;
class DrinkDecorator extends Decorator
{

    protected function behavior()
    {
        $this->time = $this->cmp->getTime() + 10;
        
        echo "喝了口水！<br/>累计用时：" . $this->time . "<br/>";
    }
}