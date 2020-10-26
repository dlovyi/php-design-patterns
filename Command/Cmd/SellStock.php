<?php
namespace Command\Cmd;

use Command\Interfaces\Order;
use Command\Client\Stock;

class SellStock implements Order
{

    protected $stock;

    public function __construct(Stock $stock)
    {
        $this->stock = $stock;
    }

    public function execute()
    {
        $this->stock->sell();
    }
}