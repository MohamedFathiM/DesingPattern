<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class WebTextInput extends AbstractTextInput
{
    public function onChange(): void
    {
        echo "this value from {$this->getName()} and its value is {$this->getValue()}";
    }

    public function render(): void
    {
       echo "Render from Web Text Input\n";
    }
}