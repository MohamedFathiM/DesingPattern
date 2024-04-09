<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order\Handlers;

use DesignPattern\Behavioral\ChainOfResponsibility\Exceptions\NoUserLoyaltyException;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Order;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Services\LoyalityService\Application;

class LoyaltyHandler extends BaseHandler
{
    public function handle(Order $order)
    {
        $loyaltyService = new Application();

        if ($loyaltyService->isUserLoyal($order->getUser())) {
            $this->getNextHandler()->handle($order);
        } else {
            throw new NoUserLoyaltyException();
        }
    }
}
