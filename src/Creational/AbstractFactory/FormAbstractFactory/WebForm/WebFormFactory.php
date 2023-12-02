<?php

namespace DesignPattern\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\FormAbstractFactory;

class WebFormFactory implements FormAbstractFactory
{

    public function createTextInput(): AbstractTextInput
    {
        return new WebTextInput('Web Input', 'Enter Your Name', 'Mohamed');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new WebTextArea('Web Textarea','Enter Your Message');
    }

    public function createButton(): AbstractButton
    {
       return new WebButton('Submit');
    }

    public function createWindow(): AbstractWindow
    {
       return new WebWindow('500 * 500');
    }
}