<?php

namespace DesignPattern\Creational\Builder\Computer\MotherBoardParts\Sockets;

class TypeC
{
    private bool $supportUtility;

    /**
     * @param bool $supportUtitlity
     */
    public function __construct(bool $supportUtility)
    {
        $this->supportUtility = $supportUtility;
    }
}