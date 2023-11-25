<?php

namespace DesignPattern\OOP\PHP\Relationship\Composition;

class Room
{
    private string $color;
    private string $size;

    /**
     * @param string $color
     * @param string $size
     */
    public function __construct(string $color, string $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getSize(): string
    {
        return $this->size;
    }

}