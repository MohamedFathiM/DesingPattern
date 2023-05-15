<?php

namespace DesignPattern\State\States;

use DesignPattern\State\OrderContext;
use DesignPattern\State\State;

class StateCreated implements State
{
    public function proceedToNext(OrderContext $orderContext)
    {
        $orderContext->setState(new StateShipped());
    }

    public function toString(): string
    {
        return "created";
    }
}
