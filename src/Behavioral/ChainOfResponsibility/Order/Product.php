<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Order;

class Product
{
    private string $id;
    private string $name;

    private int $qty;

    /**
     * @param string $id
     * @param string $name
     * @param int $qty
     */
    public function __construct(string $id, string $name, int $qty)
    {
        $this->id = $id;
        $this->name = $name;
        $this->qty = $qty;
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
