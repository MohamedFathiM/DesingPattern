<?php

namespace DesignPattern\Creational\Builder\Computer\MotherBoardParts;

class Cpu
{
    private int $speed;

    /**
     * @param int $speed
     */
    public function __construct(int $speed)
    {
        $this->speed = $speed;
    }


}