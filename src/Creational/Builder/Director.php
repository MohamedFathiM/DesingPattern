<?php

namespace DesignPattern\Creational\Builder;

use DesignPattern\Creational\Builder\Builder\Builder;
use DesignPattern\Creational\Builder\Computer\Types\Computer;

class Director
{
    private Builder $builder;

    /**
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function makeComputer(): Computer
    {
        return $this->builder->getComputer();
    }
}