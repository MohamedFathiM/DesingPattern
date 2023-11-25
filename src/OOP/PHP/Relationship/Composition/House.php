<?php

namespace DesignPattern\OOP\PHP\Relationship\Composition;

class House
{
    private array $rooms;

    public function __construct(array $rooms)
    {
        $this->rooms = $rooms;
    }
}