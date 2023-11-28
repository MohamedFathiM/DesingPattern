<?php

namespace DesignPattern\Creational\Builder\Computer\Types;

use DesignPattern\Creational\Builder\Computer\Keyboard;
use DesignPattern\Creational\Builder\Computer\Monitor;
use DesignPattern\Creational\Builder\Computer\MotherBoard;
use DesignPattern\Creational\Builder\Computer\Mouse;

abstract class Computer
{
    private MotherBoard $motherBoard;
    private Keyboard $keyboard;
    private Monitor $monitor;
    private Mouse $mouse;

    public function setMotherBoard(MotherBoard $motherBoard): void
    {
        $this->motherBoard = $motherBoard;
    }

    public function setKeyboard(Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    public function setMonitor(Monitor $monitor): void
    {
        $this->monitor = $monitor;
    }

    public function setMouse(Mouse $mouse): void
    {
        $this->mouse = $mouse;
    }


}