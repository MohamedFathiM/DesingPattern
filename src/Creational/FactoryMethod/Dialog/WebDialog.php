<?php

namespace DesignPattern\Creational\FactoryMethod\Dialog;

use DesignPattern\Creational\FactoryMethod\Button\Button;
use DesignPattern\Creational\FactoryMethod\Button\WebButton;

class WebDialog extends Dialog
{

    public function createButton(): Button
    {
        return new WebButton();
    }
}