<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class WebWindow extends AbstractWindow
{

    public function onClose(): void
    {
        echo "Thank You For your feedback\n";
    }

    public function onResize(): void
    {
        echo "The Web window resized";
    }
}