<?php

namespace DesignPattern\OOP\PHP\AbstractionVSEncapsulation;

class CarDashboard
{
    private int $oilLevel;
    private int $fuelLevel;
    private int $airPressure;

    /**
     * @param int $oilLevel
     * @param int $fuelLevel
     * @param int $airPressure
     */
    public function __construct(int $oilLevel, int $fuelLevel, int $airPressure)
    {
        $this->oilLevel = $oilLevel;
        $this->fuelLevel = $fuelLevel;
        $this->airPressure = $airPressure;
    }

    public function getOilLevel(): int
    {
        return $this->oilLevel;
    }

    public function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    public function getAirPressure(): int
    {
        return $this->airPressure;
    }

    public function readDashboard():string
    {
        return "Oil Level is {$this->getOilLevel()} , Fuel Level is {$this->getFuelLevel()} and The Air Pressure is {$this->getAirPressure()}";
    }
}