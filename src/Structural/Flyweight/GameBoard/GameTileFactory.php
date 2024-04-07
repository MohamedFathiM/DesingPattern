<?php

namespace DesignPattern\Structural\Flyweight\GameBoard;

class GameTileFactory
{
    /** @var GameTile|[] */
    private static array $tiles = [];

    public static function createTile(string $color, string $size, string $level): GameTile
    {
        $hash = md5($color . $level . $size);

        if (!array_key_exists($hash, self::$tiles)) {
            self::$tiles[$hash] = new GameTile($color, $size, $level);
        }

        return self::$tiles[$hash];
    }

    public static function getTiles(): array
    {
        return self::$tiles;
    }
}
