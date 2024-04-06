<?php

namespace DesignPattern\Structural\Composite\DTOs\DataModelDTO;

use DateTime;
use DesignPattern\Structural\Composite\DTOs\DTOModel;

class OrderDto implements DTOModel
{
    private DTOModel $owner;
    private DateTime $createdAt;
    private float $price;
    private int $quantity;

    public function __construct(DTOModel $owner, DateTime $createdAt, float $price, int $quantity)
    {
        $this->owner = $owner;
        $this->createdAt = $createdAt;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getOwner(): DTOModel
    {
        return $this->owner;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function render(): array
    {
        return [
            'owner' => $this->getOwner()->render(),
            'created_at' => $this->getCreatedAt()->format('Y-m-d H:i:s'),
            'price' => $this->getPrice(),
            'quantity' => $this->getQuantity()
        ];
    }
}
