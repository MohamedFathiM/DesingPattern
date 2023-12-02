<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class DesktopTextInput extends AbstractTextInput
{
    public function onChange(): void
    {
        echo "Desktop Text Input , this value from {$this->getName()} and its value is {$this->getValue()}";
    }

    public function render(): void
    {
        echo "Render from Desktop Text Input";
    }
}