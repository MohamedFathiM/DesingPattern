<?php

namespace DesignPattern\OOP\PHP\Relationship\Association\Teacher;

use DesignPattern\OOP\PHP\Relationship\Association\Printer\Printer;
use DesignPattern\OOP\PHP\Relationship\Association\Student;

abstract class Teacher
{
    private string $name;

    abstract public function assignHomeWork(): string;

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayWelcome(Printer $printer): string
    {
        $printer->setTextToPrint($this->name);

        return $printer->printToScreen();
    }

    public function evaluateStudentHomeWork(Student $student):string
    {
        if($student->getHomeWorkScore() >= 50){
            return "Success";
        }

        return "Failed";
    }
}