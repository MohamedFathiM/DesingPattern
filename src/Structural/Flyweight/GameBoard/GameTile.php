<?php

namespace DesignPattern\Structural\Flyweight\GameBoard;

class GameTile extends \ArrayObject
{
    private string $color;
    private string $size;
    private string $level;

    /**
     * @param string $color
     * @param string $size
     * @param string $level
     */
    public function __construct(string $color, string $size, string $level)
    {
        $this->color = $color;
        $this->size = $size;
        $this->level = $level;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getLevel(): string
    {
        return $this->level;
    }
}
