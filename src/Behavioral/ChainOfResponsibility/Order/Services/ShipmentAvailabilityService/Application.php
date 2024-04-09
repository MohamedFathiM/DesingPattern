<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order\Services\ShipmentAvailabilityService;

use DesignPattern\Behavioral\ChainOfResponsibility\Order\Order;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Product;

class Application
{
    private array $shipmentAvailability = [
        'TRK-1' => "2020-02-10",
        'TRK-2' => "2022-01-20",
        'TRK-3' => "2020-03-10"
    ];

    public function hasShipmentTruckAvailability(Order $order): bool
    {
        foreach ($this->shipmentAvailability as $shipmentDate) {
            if ($order->getShipmentDate() >= new \DateTime($shipmentDate)) {
                return true;
            }
        }

        return false;
    }
}
