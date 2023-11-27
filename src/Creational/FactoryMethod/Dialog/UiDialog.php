<?php

namespace DesignPattern\Creational\FactoryMethod\Dialog;

use DesignPattern\Creational\FactoryMethod\Button\Button;
use DesignPattern\Creational\FactoryMethod\Button\UiButton;

class UiDialog extends Dialog
{

    public function createButton(): Button
    {
       return new UiButton();
    }
}