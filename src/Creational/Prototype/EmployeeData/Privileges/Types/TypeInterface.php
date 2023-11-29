<?php

namespace DesignPattern\Creational\Prototype\EmployeeData\Privileges\Types;

interface TypeInterface
{
    public function enable():bool;
    public function disable():bool;
}