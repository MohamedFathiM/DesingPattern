<?php

namespace DesignPattern\Structural\Bridge\Grades;

class Grade2Report extends GradeReport
{

    public function showReport(): string
    {
       return $this->getReport()->showGrade2Report();
    }
}