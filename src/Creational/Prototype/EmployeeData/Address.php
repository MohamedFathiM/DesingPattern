<?php

namespace DesignPattern\Creational\Prototype\EmployeeData;

class Address
{
    private float $longitude;
    private float $latitude;
    private string $streetName;
    private string $city;
    private string $country;
    private int $builderNumber;
    private int $zipCode;

    /**
     * @param float $longitude
     * @param float $latitude
     * @param string $streetName
     * @param string $city
     * @param string $country
     * @param int $builderNumber
     * @param int $zipCode
     */
    public function __construct(float $longitude, float $latitude, string $streetName, string $city, string $country, int $builderNumber, int $zipCode)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->streetName = $streetName;
        $this->city = $city;
        $this->country = $country;
        $this->builderNumber = $builderNumber;
        $this->zipCode = $zipCode;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getBuilderNumber(): int
    {
        return $this->builderNumber;
    }

    public function getZipCode(): int
    {
        return $this->zipCode;
    }



}