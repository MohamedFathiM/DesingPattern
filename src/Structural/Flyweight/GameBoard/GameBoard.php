<?php

namespace DesignPattern\Structural\Flyweight\GameBoard;

class GameBoard
{
    /**@var GameTileBorder[]|array */
    private ?array $tiles;

    /**
     * @param array|GameTileBorder[] $tiles
     */
    public function __construct(?array $tiles = [])
    {
        $this->tiles = $tiles;
    }

    public function addTile(GameTileBorder $tile)
    {
        $this->tiles[] = $tile;
    }

    public function __toString(): string
    {
        return implode("\n ", array_map(function (GameTileBorder $gameTileBorder) {
            return $gameTileBorder->getThickness()
                . ' | ' . $gameTileBorder->getStyle()
                . ' | ' . $gameTileBorder->getTile()->getColor()
                . ' | ' . $gameTileBorder->getTile()->getSize()
                . ' | ' . $gameTileBorder->getTile()->getLevel();
        }, $this->tiles));
    }
}
