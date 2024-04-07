<?php

namespace DesignPattern\Structural\Flyweight\GameBoard;

class GameTileBorder
{
    private string $style;
    private string $thickness;

    private GameTile $tile;

    /**
     * @param string $style
     * @param string $thickness
     */
    public function __construct(
        string $style,
        string $thickness,
        string $color,
        string $size,
        string $level
    ) {
        $this->style = $style;
        $this->thickness = $thickness;
        $this->tile = GameTileFactory::createTile($color, $size, $level);
    }

    public function getStyle(): string
    {
        return $this->style;
    }

    public function getThickness(): string
    {
        return $this->thickness;
    }

    public function getTile(): GameTile
    {
        return $this->tile;
    }
}
