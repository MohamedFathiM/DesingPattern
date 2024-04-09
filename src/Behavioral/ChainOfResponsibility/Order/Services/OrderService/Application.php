<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order\Services\OrderService;

use DesignPattern\Behavioral\ChainOfResponsibility\Order\Order;

class Application
{
    private array $orders = [];

    public function addOrder(Order $order): void
    {
        $this->orders[] = $order;
    }
}
