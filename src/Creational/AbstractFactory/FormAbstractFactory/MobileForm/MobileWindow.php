<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class MobileWindow extends AbstractWindow
{

    public function onClose(): void
    {
        echo "Thank You For your feedback\n";
    }

    public function onResize(): void
    {
        echo "The Mobile window resized";
    }
}