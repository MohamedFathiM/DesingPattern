<?php

namespace DesignPattern\Creational\FactoryMethod\Dialog;

use DesignPattern\Creational\FactoryMethod\Button\Button;
use DesignPattern\Creational\FactoryMethod\Button\SystemButton;

class SystemDialog extends Dialog
{

    public function createButton(): Button
    {
        return new SystemButton();
    }
}