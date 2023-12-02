<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class WebTextArea extends AbstractTextArea
{

    public function onResize(): void
    {
        echo "web text area {$this->getName()} has been Resized";
    }

    public function render(): void
    {
        echo "Hello from Web Textarea Render \n";
    }
}