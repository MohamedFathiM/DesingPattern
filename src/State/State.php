<?php

namespace DesignPattern\State;

interface State
{
    public function proceedToNext(OrderContext $orderContext);

    public function toString(): string;
}
