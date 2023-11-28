<?php

namespace DesignPattern\Creational\Builder\Computer;

class Keyboard
{
    private bool $supportUtf8;

    /**
     * @param bool $supportUtf8
     */
    public function __construct(bool $supportUtf8)
    {
        $this->supportUtf8 = $supportUtf8;
    }
}