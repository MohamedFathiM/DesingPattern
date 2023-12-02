<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class DesktopButton extends AbstractButton
{

    function onClick(): void
    {
        echo "Desktop Button Clicked";
    }

    public function render(): void
    {
        echo "Hello from Desktop Button Render \n";
    }
}