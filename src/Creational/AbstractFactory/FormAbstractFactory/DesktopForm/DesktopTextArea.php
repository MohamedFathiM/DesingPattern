<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class DesktopTextArea extends AbstractTextArea
{
    public function onResize(): void
    {
        echo "Desktop text area {$this->getName()} has been Resized";
    }

    public function render(): void
    {
        echo "Hello from Web TextArea Render \n";
    }
}