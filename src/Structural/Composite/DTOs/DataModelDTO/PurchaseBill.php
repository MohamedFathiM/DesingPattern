<?php

namespace DesignPattern\Structural\Composite\DTOs\DataModelDTO;

use DesignPattern\Structural\Composite\DTOs\DTOModel;

class PurchaseBill implements DTOModel
{
    private array $orders;

    public function __construct(array $orders)
    {
        $this->orders = $orders;
    }

    public function addOrder(DTOModel $order)
    {
        $this->orders[] = $order;
    }

    public function __toString()
    {
        return json_encode($this->render(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    public function render(): array
    {
        return [
            'orders' => array_map(fn (DTOModel $order) => $order->render(), $this->orders)
        ];
    }
}
