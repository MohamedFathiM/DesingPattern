<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order\Handlers;

use DesignPattern\Behavioral\ChainOfResponsibility\Exceptions\ProductShipmentException;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Order;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Services\ShipmentAvailabilityService\Application;

class ShipmentAvailabilityServiceHandler extends BaseHandler
{

    /**
     * @throws \Exception
     */
    public function handle(Order $order)
    {
        $shipmentAvailabilityService = new Application();

        if ($shipmentAvailabilityService->hasShipmentTruckAvailability($order)) {
            if ($this->getNextHandler() != null) {
                $this->getNextHandler()->handle($order);
            }
        } else {
            throw new ProductShipmentException();
        }
    }
}
