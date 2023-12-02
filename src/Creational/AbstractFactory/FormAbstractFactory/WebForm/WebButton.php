<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class WebButton extends AbstractButton
{

    function onClick(): void
    {
        echo "Web Button Clicked";
    }

    public function render(): void
    {
        echo "Hello from Web Button Render \n";
    }
}