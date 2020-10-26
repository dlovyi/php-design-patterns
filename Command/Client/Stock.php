<?php
namespace Command\Client;

class Stock
{

    private $name = '';

    private $quality = 0;

    public function __construct($name, $quality)
    {
        $this->name = $name;
        $this->quality = $quality;
    }

    public function buy()
    {
        echo "Buy : $this->name $this->quality <br/>";
    }

    public function sell()
    {
        echo "Sold : $this->name $this->quality <br/>";
    }
}