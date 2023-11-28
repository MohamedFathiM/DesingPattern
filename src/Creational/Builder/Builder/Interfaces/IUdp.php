<?php

namespace DesignPattern\Creational\Builder\Builder\Interfaces;

use DesignPattern\Creational\Builder\Computer\Ups;

interface IUdp
{
    public function buildUps():Ups;
}