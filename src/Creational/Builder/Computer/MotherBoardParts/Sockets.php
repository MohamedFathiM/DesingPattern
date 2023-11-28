<?php

namespace DesignPattern\Creational\Builder\Computer\MotherBoardParts;

class Sockets
{
    private array $sockets = [];

    /**
     * @param array $sockets
     */
    public function __construct(array $sockets)
    {
        $this->sockets = $sockets;
    }
}