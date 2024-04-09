<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order\Handlers;

use DesignPattern\Behavioral\ChainOfResponsibility\Order\Order;

interface Handler
{
    public function setNextHandler(Handler $handler): BaseHandler;

    public function handle(Order $order);
}
