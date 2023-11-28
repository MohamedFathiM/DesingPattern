<?php

namespace DesignPattern\Creational\Builder\Computer\Types;

use DesignPattern\Creational\Builder\Computer\CoolingSystem;

class ComputerCs extends Computer
{
    private CoolingSystem $coolingSystem;

    public function setCoolingSystem(CoolingSystem $coolingSystem): void
    {
        $this->coolingSystem = $coolingSystem;
    }


}