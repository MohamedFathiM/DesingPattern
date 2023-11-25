<?php

require_once '../vendor/autoload.php';

$mohamed = new \DesignPattern\OOP\PHP\Polymorphism\Employee(
    "Mohamed",
    28,
    new \DesignPattern\OOP\PHP\Polymorphism\Salary(
        1500,
        0,
        0,
        0,
        0,
        0
    )
);

$microwave = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\Microwave(90, 'DE1', 30);
var_dump($mohamed->getName());
var_dump($mohamed->getAge());

if ($microwave->turnOn()) {
    var_dump($microwave->deFreeze());
    $microwave->turnOff();
}

$bmw = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\BMW(
    120,
    2,
    "FRONT",
    "BLACK"
);

$mercedes = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\Mercedes(
    320,
    2,
    'BACK',
    'White'
);

$order1 = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\Order('Cairo', 'Alex', 120);
$order2 = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\Order('Suhag', 'Aswan', 300);

var_dump($order1->deliverOrder($bmw));
var_dump($order2->deliverOrder($mercedes));

// Encapsulation
$bmw->installDashboard(new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\CarDashboard(5, 9, 100));
var_dump($bmw->getCarDashboard());

$ahmed = new \DesignPattern\OOP\PHP\Polymorphism\Employee(
    'Ahmed',
    30,
    new \DesignPattern\OOP\PHP\Polymorphism\OrganizationSalary(
        4500,
        0.2,
        2,
        30,
        65,
        20,
        0.1
    )
);

var_dump($ahmed->getSalary()->calculateSalary());
var_dump($ahmed->getSalary()->calculateSalary(0.1));

$khaled = new \DesignPattern\OOP\PHP\Relationship\Association\Teacher\ScienceTeacher("Khaled");
$ahmedTeacher = new \DesignPattern\OOP\PHP\Relationship\Association\Teacher\ScienceTeacher("Ahmed");

var_dump($khaled->sayWelcome(new \DesignPattern\OOP\PHP\Relationship\Association\Printer\PlainTextPrinter()));

$ali = new \DesignPattern\OOP\PHP\Relationship\Association\Student("Ali");
$ali->assignTempTeacher($khaled);
var_dump("Ali is assigned to {$khaled->getName()} " . "And his score is : " . $khaled->evaluateStudentHomeWork($ali));
$ali->assignTempTeacher($ahmedTeacher);
var_dump("Ali is assigned to {$ahmedTeacher->getName()} " . "And his score is : " . $ahmedTeacher->evaluateStudentHomeWork($ali));


// Aggregation
$dev1 = new \DesignPattern\OOP\PHP\Relationship\Aggregation\Developer("Mohamed");
$dev2 = new \DesignPattern\OOP\PHP\Relationship\Aggregation\Developer("Ahmed");
$dev3 = new \DesignPattern\OOP\PHP\Relationship\Aggregation\Developer("Ali");

$project = new \DesignPattern\OOP\PHP\Relationship\Aggregation\Project(
    "project-x",
    new DateTime('now'),
    [$dev1, $dev2, $dev3]
);
$project->setDeadLineTo(new DateInterval('P1M'));

var_dump($project->showProjectInfo());

// Composition (strong relationship)
$room1 = new \DesignPattern\OOP\PHP\Relationship\Composition\Room('White', 120);
$room2 = new \DesignPattern\OOP\PHP\Relationship\Composition\Room('Green', 150);
$room3 = new \DesignPattern\OOP\PHP\Relationship\Composition\Room('Black', 160);

$house = new \DesignPattern\OOP\PHP\Relationship\Composition\House([$room1, $room2, $room3]);


# Summary of Relationships Types
/**
 * Association
 * Aggregation (Has_a) Project Has A Developer
 * Composition (part_of) Room part of House
 *
 * Inheritance - Generalization (is_a) - Manager is an employee
 *
 */
