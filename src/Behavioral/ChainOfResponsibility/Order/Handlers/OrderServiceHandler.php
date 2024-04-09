<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order\Handlers;

use DesignPattern\Behavioral\ChainOfResponsibility\Order\Order;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Services\OrderService\Application;

class OrderServiceHandler extends BaseHandler
{

    public function handle(Order $order)
    {
        $orderService = new Application;
        $orderService->addOrder($order);

        echo "Order For User {$order->getUser()->getName()} which Contains Product : {$order->getProduct()->getName()}
        With Quantity : {$order->getProduct()->getQty()} is ship at {$order->getShipmentDate()->format('Y-m-d')}
       \n";
    }
}
