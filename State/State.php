<?php

interface State
{
    public function proceedToNext(OrderContext $orderContext);

    public function toString(): string;
}
