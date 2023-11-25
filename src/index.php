<?php

require_once '../vendor/autoload.php';

$mohamed = new \DesignPattern\OOP\PHP\Employee(
    "Mohamed",
    28,
    1500
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

$order1 = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\Order('Cairo','Alex' , 120);
$order2 = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\Order('Suhag','Aswan',300);

var_dump($order1->deliverOrder($bmw));
var_dump($order2->deliverOrder($mercedes));

// Encapsulation
$bmw->installDashboard(new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\CarDashboard(5,9,100));
var_dump($bmw->getCarDashboard());