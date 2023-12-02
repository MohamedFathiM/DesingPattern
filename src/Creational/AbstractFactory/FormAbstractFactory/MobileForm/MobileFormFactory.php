<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\FormAbstractFactory;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\WebForm\WebTextArea;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\WebForm\WebTextInput;

class MobileFormFactory implements FormAbstractFactory
{

    public function createTextInput(): AbstractTextInput
    {
        return new WebTextInput('Mobile Input', 'Enter Your Name', 'Mohamed');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new WebTextArea('Mobile Textarea', 'Enter Your Message');
    }

    public function createButton(): AbstractButton
    {
        return new MobileButton('Save');
    }

    public function createWindow(): AbstractWindow
    {
        return new MobileWindow('250*250');
    }
}