<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class MobileButton extends AbstractButton
{

    function onClick(): void
    {
        echo "Mobile Button Clicked";
    }

    public function render(): void
    {
        echo "Hello from Mobile Button Render \n";
    }
}