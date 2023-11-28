<?php

namespace DesignPattern\Creational\Builder\Computer\MotherBoardParts;

class Gpu
{
    private string $type;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

}