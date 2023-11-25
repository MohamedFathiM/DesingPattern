<?php

namespace DesignPattern\OOP\PHP\Relationship\Association\Teacher;

class MathTeacher extends Teacher
{

    public function assignHomeWork(): string
    {
        return "Calculate 10 * 10 ";
    }
}