<?php

namespace DesignPattern\Creational\Builder\Builder\Interfaces;

use DesignPattern\Creational\Builder\Computer\CoolingSystem;

interface ICoolingSystem
{
    public function buildCoolingSystem(): CoolingSystem;
}