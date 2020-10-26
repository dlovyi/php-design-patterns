<?php
namespace Command\Invoker;

use Command\Interfaces\Order;
class Broker
{

    private $orderList = [];

    /**
     * 加入订单
     * 
     * @param Order $order            
     */
    public function takeOrder(Order $order)
    {
        $this->orderList[] = $order;
    }

    /**
     * 处理订单
     */
    public function placeOrder()
    {
        if (!empty($this->orderList)) {
            foreach ($this->orderList as $k => $v) {
                $v->execute();
            }
        }
        $this->orderList = [];
    }
}