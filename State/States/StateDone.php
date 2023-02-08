<?php


class StateDone implements State
{
    public function proceedToNext(OrderContext $orderContext)
    {
    }

    public function toString(): string
    {
        return "Done";
    }
}
