<?php

namespace DesignPattern\OOP\PHP\Polymorphism;

class OrganizationSalary extends Salary
{
    protected float $organizationTax;

    public function __construct(float $salary, float $tax, int $absent, int $overTime, int $overTimeRate, int $absenceRate,float $organizationTax)
    {
        parent::__construct( $salary,  $tax,  $absent,  $overTime,  $overTimeRate,  $absenceRate);
        $this->organizationTax = $organizationTax;
    }

    public function calculateSalary(): float
    {
        return $this->salary - ($this->salary * $this->tax) - ($this->salary * $this->organizationTax);
    }
}