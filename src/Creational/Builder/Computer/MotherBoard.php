<?php

namespace DesignPattern\Creational\Builder\Computer;

use DesignPattern\Creational\Builder\Computer\MotherBoardParts\Cpu;
use DesignPattern\Creational\Builder\Computer\MotherBoardParts\Gpu;
use DesignPattern\Creational\Builder\Computer\MotherBoardParts\Ram;
use DesignPattern\Creational\Builder\Computer\MotherBoardParts\Sockets;

class MotherBoard
{
    private Cpu $cpu;
    private Ram $ram;
    private Gpu $gpu;

    private Sockets $sockets;

    /**
     * @param Cpu $cpu
     * @param Ram $ram
     * @param Gpu $gpu
     * @param Sockets $sockets
     */
    public function __construct(Cpu $cpu, Ram $ram, Gpu $gpu, Sockets $sockets)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->sockets = $sockets;
    }


}