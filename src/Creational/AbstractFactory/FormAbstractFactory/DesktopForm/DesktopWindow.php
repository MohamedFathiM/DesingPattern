<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class DesktopWindow extends AbstractWindow
{

    public function onClose(): void
    {
        echo "Thank You For your feedback\n";
    }

    public function onResize(): void
    {
        echo "The Desktop window resized";
    }
}