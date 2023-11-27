<?php

namespace DesignPattern\Creational\FactoryMethod\Dialog;

use DesignPattern\Creational\FactoryMethod\Button\Button;

abstract class Dialog
{
    abstract public function createButton(): Button;

    public function render(): string
    {
        $button = $this->createButton();
        return "
        ###################################
            {$button->show()}
        ###################################
        ";
    }
}