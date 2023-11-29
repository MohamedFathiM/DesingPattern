<?php

namespace DesignPattern\Creational\Prototype\EmployeeData\Privileges\Types;

class WebProjectPrivilege implements TypeInterface
{

    public function enable(): bool
    {
        return true;
    }

    public function disable(): bool
    {
        return true;
    }
}
