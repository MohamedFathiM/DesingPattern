<?php

namespace DesignPattern\Structural\Composite\DTOs\DataModelDTO;

use DesignPattern\Structural\Composite\DTOs\DTOModel;

class OrderOwnerDto implements DTOModel
{
    private string $name;
    private DTOModel $address;

    public function __construct(string $name, AddressDto $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): AddressDto
    {
        return $this->address;
    }

    public function render(): array
    {
        return [
            'name' => $this->getName(),
            'address' => $this->getAddress()->render()
        ];
    }
}
