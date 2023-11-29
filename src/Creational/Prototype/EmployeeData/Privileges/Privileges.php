<?php

namespace DesignPattern\Creational\Prototype\EmployeeData\Privileges;

use DesignPattern\Creational\Prototype\EmployeeData\Privileges\Types\TypeInterface;

class Privileges
{

    private array $privileges;

    /**
     * @param array $privileges
     */
    public function __construct(array $privileges)
    {
        $this->privileges = $privileges;
    }

    public function getPrivileges(): array
    {
        return $this->privileges;
    }

    public function addPrivilege(TypeInterface $privilege)
    {
        $this->privileges[] = $privilege;
    }

    public function clearPrivileges()
    {
        $this->privileges = [];
    }
}