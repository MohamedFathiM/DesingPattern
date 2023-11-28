<?php

namespace DesignPattern\Creational\Builder\Computer\MotherBoardParts\Sockets;

class Usb
{
    private int $version ;

    /**
     * @param int $version
     */
    public function __construct(int $version)
    {
        $this->version = $version;
    }


}