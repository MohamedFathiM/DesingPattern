<?php

namespace DesignPattern\OOP\PHP\Relationship\Association;

use DesignPattern\OOP\PHP\Relationship\Association\Teacher\Teacher;

class Student
{
    private string $name;
    private string $homeWork;
    private int $homeWorkScore = 50;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function assignTempTeacher(Teacher $teacher){
        $this->homeWork = $teacher->assignHomeWork();
    }

    public function getHomeWorkScore()
    {
        return $this->homeWorkScore;
    }

    public function doHomework()
    {
        $this->homeWorkScore = 60;
    }
}