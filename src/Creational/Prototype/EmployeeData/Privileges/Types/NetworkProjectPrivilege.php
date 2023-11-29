<?php

namespace DesignPattern\Creational\Prototype\EmployeeData\Privileges\Types;

class NetworkProjectPrivilege implements TypeInterface
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
