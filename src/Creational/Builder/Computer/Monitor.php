<?php

namespace DesignPattern\Creational\Builder\Computer;

class Monitor
{
    private int $resolution;

    /**
     * @param int $resolution
     */
    public function __construct(int $resolution)
    {
        $this->resolution = $resolution;
    }

}