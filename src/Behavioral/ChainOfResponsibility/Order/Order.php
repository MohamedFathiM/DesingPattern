<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order;

class Order
{
    private User $user;
    private Product $product;
    private \DateTime $shipmentDate;

    /**
     * @param User $user
     * @param Product $product
     * @param \DateTime $shipmentDate
     */
    public function __construct(User $user, Product $product, \DateTime $shipmentDate)
    {
        $this->user = $user;
        $this->product = $product;
        $this->shipmentDate = $shipmentDate;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getShipmentDate(): \DateTime
    {
        return $this->shipmentDate;
    }
}
