<?php

namespace DesignPattern\Creational\Builder\Computer;

class Ups
{
    private  string $type ;

    public function setType(string $type): void
    {
        $this->type = $type;
    }


}