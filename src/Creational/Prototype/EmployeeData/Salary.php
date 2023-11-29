<?php

namespace DesignPattern\Creational\Prototype\EmployeeData;

class Salary
{
    private float $salary;
    private float $tax;
    private float $medicalInsurance;

    /**
     * @param float $salary
     * @param float $tax
     * @param float $medicalInsurance
     */
    public function __construct(float $salary, float $tax, float $medicalInsurance)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->medicalInsurance = $medicalInsurance;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getTax(): float
    {
        return $this->tax;
    }

    public function getMedicalInsurance(): float
    {
        return $this->medicalInsurance;
    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function setTax(float $tax): void
    {
        $this->tax = $tax;
    }

    public function setMedicalInsurance(float $medicalInsurance): void
    {
        $this->medicalInsurance = $medicalInsurance;
    }

}