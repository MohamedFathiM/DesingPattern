<?php

namespace DesignPattern\Creational\Prototype\EmployeeData\Privileges\Types;

class ServerProjectPrivilege implements TypeInterface
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
