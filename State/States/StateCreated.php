<?php

require "StateShipped.php";

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
