<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order\Services\ProductAvailabilityService;

use DesignPattern\Behavioral\ChainOfResponsibility\Order\Product;

class Application
{
    private array $productAvailability = [
        'PRD-100' => 50,
        'PRD-101' => 70,
        'PRD-103' => 0
    ];

    public function isProductAvailable(Product $product): bool
    {
        return @$this->productAvailability[$product->getId()] > $product->getQty();
    }
}
