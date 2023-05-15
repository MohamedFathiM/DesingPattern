<?php

namespace DesignPattern\State\States;

class StateShipped implements State
{
    public function proceedToNext(OrderContext $orderContext)
    {
        $orderContext->setState(new StateDone());
    }

    public function toString(): string
    {
        return 'shipped';
    }
}
