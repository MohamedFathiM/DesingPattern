<?php

namespace DesignPattern\Creational\Builder\Builder;

use DesignPattern\Creational\Builder\Computer\Keyboard;
use DesignPattern\Creational\Builder\Computer\Monitor;
use DesignPattern\Creational\Builder\Computer\MotherBoard;
use DesignPattern\Creational\Builder\Computer\Mouse;
use DesignPattern\Creational\Builder\Computer\Types\Computer;

abstract class Builder
{
    abstract protected function buildMotherBoard(): MotherBoard;

    abstract protected function buildKeyboard(): Keyboard;

    abstract protected function buildMouse(): Mouse;

    abstract protected function BuildMonitor(): Monitor;

    abstract public function getComputer(): Computer;
}