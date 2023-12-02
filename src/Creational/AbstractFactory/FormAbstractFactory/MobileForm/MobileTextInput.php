<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class MobileTextInput extends AbstractTextInput
{
    public function onChange(): void
    {
        echo "Mobile Text Input , this value from {$this->getName()} and its value is {$this->getValue()}";
    }

    public function render(): void
    {
        echo "Render from Mobile Text Input";
    }
}