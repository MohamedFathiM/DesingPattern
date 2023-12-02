<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class MobileTextArea extends AbstractTextArea
{

    public function onResize(): void
    {
        echo "Mobile text area {$this->getName()} has been Resized";
    }

    public function render(): void
    {
        echo "Hello from Web Textarea Render \n";
    }
}