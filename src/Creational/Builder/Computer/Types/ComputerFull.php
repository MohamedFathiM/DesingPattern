<?php

namespace DesignPattern\Creational\Builder\Computer\Types;

use DesignPattern\Creational\Builder\Computer\CoolingSystem;
use DesignPattern\Creational\Builder\Computer\Ups;

class ComputerFull extends Computer
{
    private CoolingSystem $coolingSystem;
    private Ups $ups;

    public function setCoolingSystem(CoolingSystem $coolingSystem): void
    {
        $this->coolingSystem = $coolingSystem;
    }

    public function setUps(Ups $ups): void
    {
        $this->ups = $ups;
    }
}