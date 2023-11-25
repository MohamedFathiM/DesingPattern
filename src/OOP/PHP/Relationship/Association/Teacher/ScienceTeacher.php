<?php

namespace DesignPattern\OOP\PHP\Relationship\Association\Teacher;


class ScienceTeacher extends Teacher
{
    public function assignHomeWork(): string
    {
       return "Do Research on Plants";
    }
}