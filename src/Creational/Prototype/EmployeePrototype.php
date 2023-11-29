<?php

namespace DesignPattern\Creational\Prototype;

use DesignPattern\Creational\Prototype\EmployeeData\Privileges\Privileges;
use DesignPattern\Creational\Prototype\EmployeeData\Privileges\Types\ServerProjectPrivilege;
use DesignPattern\Creational\Prototype\EmployeeData\Privileges\Types\WebProjectPrivilege;
use DesignPattern\Creational\Prototype\EmployeeData\ProfileData;
use DesignPattern\Creational\Prototype\EmployeeData\Salary;

class EmployeePrototype implements Prototype
{
    private ProfileData $profileData;
    private Salary $salary;

    private Privileges $privileges;

    /**
     * @param ProfileData $profileData
     * @param Salary $salary
     * @param Privileges $privileges
     */
    public function __construct(ProfileData $profileData, Salary $salary, Privileges $privileges)
    {
        $this->profileData = $profileData;
        $this->salary = $salary;
        $this->privileges = $privileges;
    }


    public function __clone()
    {
        $this->privileges->clearPrivileges();
        $this->privileges->addPrivilege(new WebProjectPrivilege());
        $this->privileges->addPrivilege(new ServerProjectPrivilege());

        $this->salary->setTax(0.1);
        $this->salary->setSalary(1500);
        $this->salary->setMedicalInsurance(200);

        $this->profileData->setAddress(null);
        $this->profileData->setAge(20);
        $this->profileData->setMobileNumber(0);
        $this->profileData->setTelephoneNumber(0);
        $this->profileData->setSlackAccountName('slack.account');

        return $this;
    }
}