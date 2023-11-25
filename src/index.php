<?php

require_once '../vendor/autoload.php';

$mohamed = new \DesignPattern\OOP\PHP\Employee(
    "Mohamed",
    28,
    1500
);

var_dump($mohamed->getName());
var_dump($mohamed->getAge());