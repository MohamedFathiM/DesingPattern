<?php

namespace DesignPattern\OOP\PHP\AbstractionVSEncapsulation;

class Mercedes extends Car
{

    public function move(): int
    {
        return $this->speed;
    }

    public function turnOn(): bool
    {
        // two operations before turning on
        $this->turnedOn = true;

        return true;
    }

    public function turnOff(): bool
    {
        // two operations before turning on
        $this->turnedOn = false;

        return true;
    }

    public function accelerate(int $speed): bool
    {
       $this->speed = $speed * 0.5 + 2;

       return true;
    }

    public function park(): bool
    {
        // 1 operation before park
        return true;
    }
}