<?php

namespace DesignPattern\Creational\Prototype\EmployeeData;

class ProfileData
{
    private string $name = 'Employee Name';
    private int $age;
    private ?Address $address;
    private string $telephoneNumber;
    private string $mobileNumber;
    private string $slackAccountName;

    /**
     * @param string $name
     * @param int $age
     * @param Address|null $address
     * @param string $telephoneNumber
     * @param string $mobileNumber
     * @param string $slackAccountName
     */
    public function __construct(string $name, int $age, ?Address $address, string $telephoneNumber, string $mobileNumber, string $slackAccountName)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->telephoneNumber = $telephoneNumber;
        $this->mobileNumber = $mobileNumber;
        $this->slackAccountName = $slackAccountName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function getTelephoneNumber(): string
    {
        return $this->telephoneNumber;
    }

    public function getMobileNumber(): string
    {
        return $this->mobileNumber;
    }

    public function getSlackAccountName(): string
    {
        return $this->slackAccountName;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    public function setTelephoneNumber(string $telephoneNumber): void
    {
        $this->telephoneNumber = $telephoneNumber;
    }

    public function setMobileNumber(string $mobileNumber): void
    {
        $this->mobileNumber = $mobileNumber;
    }

    public function setSlackAccountName(string $slackAccountName): void
    {
        $this->slackAccountName = $slackAccountName;
    }


}