<?php

namespace DesignPattern\Creational\Builder\Builder\Builders;

use DesignPattern\Creational\Builder\Builder\Builder;
use DesignPattern\Creational\Builder\Builder\Interfaces\ICoolingSystem;
use DesignPattern\Creational\Builder\Computer\CoolingSystem;
use DesignPattern\Creational\Builder\Computer\Keyboard;
use DesignPattern\Creational\Builder\Computer\Monitor;
use DesignPattern\Creational\Builder\Computer\MotherBoard;
use DesignPattern\Creational\Builder\Computer\MotherBoardParts\Cpu;
use DesignPattern\Creational\Builder\Computer\MotherBoardParts\Gpu;
use DesignPattern\Creational\Builder\Computer\MotherBoardParts\Ram;
use DesignPattern\Creational\Builder\Computer\MotherBoardParts\Sockets;
use DesignPattern\Creational\Builder\Computer\Mouse;
use DesignPattern\Creational\Builder\Computer\Types\Computer;
use DesignPattern\Creational\Builder\Computer\Types\ComputerCs;

class BuilderCs extends Builder implements ICoolingSystem
{

    public function buildMotherBoard(): MotherBoard
    {
        $cpu = new Cpu(20);
        $ram = new Ram(16);
        $gpu = new Gpu('High');
        $sockets = new Sockets([
            new Sockets\TypeC(true),
            new Sockets\TypeC(true),
            new Sockets\Usb(2),
            new Sockets\Usb(3),
        ]);

        return new MotherBoard(
            $cpu,
            $ram,
            $gpu,
            $sockets
        );
    }

    public function buildKeyboard(): Keyboard
    {
       return new Keyboard(true);
    }

    public function buildMouse(): Mouse
    {
       return new Mouse(true);
    }

    public function BuildMonitor(): Monitor
    {
        return new Monitor(1600);
    }

    public function buildCoolingSystem(): CoolingSystem
    {
       return new CoolingSystem();
    }

    public function getComputer(): Computer
    {
        $computer = new ComputerCs();
        $computer->setMotherBoard($this->buildMotherBoard());
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMouse($this->buildMouse());
        $computer->setCoolingSystem($this->buildCoolingSystem());

        return $computer;
    }

}