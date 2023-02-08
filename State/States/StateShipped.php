<?php

require "State/State.php";
require "StateDone.php";

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
