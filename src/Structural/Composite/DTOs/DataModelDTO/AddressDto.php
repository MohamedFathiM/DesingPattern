<?php

namespace DesignPattern\Structural\Composite\DTOs\DataModelDTO;

use DesignPattern\Structural\Composite\DTOs\DTOModel;

class AddressDto implements DTOModel
{
    private string $street;
    private string $buildingNumber;
    private string $city;

    public function __construct(string $street, string $buildingNumber, string $city)
    {
        $this->street = $street;
        $this->buildingNumber = $buildingNumber;
        $this->city = $city;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getBuildingNumber(): string
    {
        return $this->buildingNumber;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function render(): array
    {
        return [
            'street' => $this->getStreet(),
            'building_number' => $this->getBuildingNumber(),
            'city' => $this->getCity()
        ];
    }
}
