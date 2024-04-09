<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order\Handlers;

use DesignPattern\Behavioral\ChainOfResponsibility\Exceptions\ProductAvailabilityException;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Order;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Services\ProductAvailabilityService\Application;

class ProductAvailabilityServiceHandler extends BaseHandler
{

    /**
     * @throws \Exception
     */
    public function handle(Order $order)
    {
        $productAvailabilityService = new Application();

        if ($productAvailabilityService->isProductAvailable($order->getProduct())) {
            $this->getNextHandler()->handle($order);
        } else {
            throw new ProductAvailabilityException();
        }
    }
}
