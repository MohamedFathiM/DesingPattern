<?php

namespace DesignPattern\Creational\Builder\Computer\MotherBoardParts;

class Ram
{
    private int $size;

    /**
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

}